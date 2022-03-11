const express = require('express');
const  router =  express.Router();
const fetchuser = require('../middleware/fetchuser');
const  Notes = require('../models/Notes')
const { body, validationResult } = require('express-validator');
//  Route 1:  fetchallnotes using get: '/api/auth/fetchallnotes'  - login required

router.get('/fetchallnotes', fetchuser, async  (req, res)=>{
try {
    const notes = await Notes.find({user: req.user.id})
 res.json(notes)
}  catch (error) {
    console.error(error.message);
    res.status(500).send("Inter server error");
  }

})



//  Route 2:   Add new Note using POST : '/api/auth/addnotes'  - login required
router.post('/addnotes', fetchuser, [
    body('title', 'Enter a valid  title').isLength({ min: 3 }),
    body('description', 'Description must be atleast 5 characters').isLength({ min: 5 }),

], async  (req, res)=>{
    const {title, description,tag} = req.body

 // if the error return bad request 
 const errors = validationResult(req);
 if (!errors.isEmpty()) {
   return res.status(400).json({ errors: errors.array() });
 }
 try {
    const note = new Notes({
        title, description,tag, user : req.user.id
    })
    const saveNotes  = await note.save()
     res.json(saveNotes)
 }  catch (error) {
    console.error(error.message);
    res.status(500).send("Inter server error");
  }

})
//  Route 3:   updating existing using POST : '/api/auth/updatenotes/:id'  - login required
router.put('/updatenotes/:id', fetchuser,  async  (req, res)=>{
    const {title, description,tag} = req.body
  // create a newNotes object
try {
  const newNotes = {}
 if(title){newNotes.title = title}
 if(description){newNotes.description =  description}
 if(tag){newNotes.tag =  tag}
 
//  find the note to be updated and update it
 let note = await Notes.findById(req.params.id);
if(!note){return res.status(404).send("Not Found")}
if (note.user.toString() !== req.user.id){
  {return res.status(401).send("Not  Allowed")}
}
note = await Notes.findByIdAndUpdate(req.params.id, {$set: newNotes}, {new:true})
res.json(note)
}   catch (error) {
  console.error(error.message);
  res.status(500).send("Inter server error");
}
 
})
//  Route 4:    Delete existing notes using  Delete : '/api/notes/deletenotes/:id'  - login required
router.delete('/deletenotes/:id', fetchuser,  async  (req, res)=>{
     try {
       
//  find the note to be  deleted and  delete it
 let note = await Notes.findById(req.params.id);
 if(!note){return res.status(404).send("Not Found")}
 // Allow deletion  only if user own this note
 if (note.user.toString() !== req.user.id){
   {return res.status(401).send("Not  Allowed")}
 }
 note = await Notes.findByIdAndDelete(req.params.id)
 console.log(note);
 res.json({ "Success" : "Note has been deleted" , note: note})
     }  catch (error) {
      console.error(error.message);
      res.status(500).send("Inter server error");
    }
 
})
module.exports = router;
