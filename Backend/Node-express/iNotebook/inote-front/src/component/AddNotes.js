import React, {useContext, useState} from 'react';
import NoteContex from '../contex/notes/NoteContex';

const AddNotes = (props) => {
  const {showAlert} = props
    const context = useContext(NoteContex);
const {addNote} = context;

const [note, setNote] = useState({title: "", description:"", tag:  ""} );
const handleClick = (e) =>{
e.preventDefault();
addNote(note.title, note.description, note.tag)
setNote({title: "", description:"", tag:  ""})
showAlert("Note Added Successfully", 'success')
}
const  onChange= (e)=>{
setNote({...note, [e.target.name ] : e.target.value})
}
  return (  <div className='container'>
  <h2>  Add Notes</h2>
 <form className='my-3'>
<div className="form-group">
  <label htmlFor="exampleInputEmail1">Title</label>
  <input type="text" className="form-control" id="title"   name="title" aria-describedby="emailHelp" value={note.title} onChange={onChange} minLength ={5} required/>
</div>
<div className="form-group">
  <label htmlFor="exampleInputPassword1"> Description</label>
  <input type="text" className="form-control" id="description"   name="description" value={note.description} onChange={onChange}  minLength ={5} required/>
</div>
<div className="form-group">
  <label htmlFor="exampleInputPassword1">  Tag</label>
  <input type="text" className="form-control" id="tag"   name="tag" value={note.tag} onChange={onChange} minLength ={5} required/>
</div>
 
<button   disabled= {note.title.length< 5 || note.description.length < 5}       type="submit" className="btn btn-primary my-3" onClick={handleClick}>  Add Note</button>
</form>
</div>
  )
};

export default AddNotes;
