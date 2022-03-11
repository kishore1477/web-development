import React, { useContext, useEffect, useRef, useState } from 'react';
import NoteContex from '../contex/notes/NoteContex';
import Noteitem from './Noteitem';
import AddNotes from './AddNotes';
import {useNavigate} from 'react-router-dom';
function Notes(props) {
const {showAlert} = props
  const context = useContext(NoteContex);
  const { notes, getNote, editNote } = context
  const [note, setNote] = useState({etitle: "", edescription:"", etag:  ""} );
  const navigate = useNavigate();
  useEffect(() => {
      getNote()
    // if(localStorage.getItem('token')){

    // }else{
    //   navigate('/Login')
    // }
    // eslint-disable-next-line
  }, []);
  const ref = useRef(null)
  const refClose = useRef(null)

  const updateNote = (currentnote) => {
    console.log("updated");
    ref.current.click()
    setNote({ id: currentnote._id,  etitle:currentnote.title, edescription:currentnote.description, etag: currentnote.tag});

  }

  const handleClick = (e) =>{
  
    editNote(note.id, note.etitle, note.edescription, note.etag)
    // console.log( "Updating the note ..." +  note);
    showAlert("Updated Successfully", 'success')
    refClose.current.click()

    
    }
    const  onChange= (e)=>{
    setNote({...note, [e.target.name ] : e.target.value})
    }

  return (
    <>
      <AddNotes showAlert = {showAlert}/>

      <button ref={ref} type="button" className=" d-none btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
      </button>



      <div className="modal fade" id="exampleModal" tabIndex={-1} aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div className="modal-dialog">
          <div className="modal-content">
            <div className="modal-header">
              <h5 className="modal-title" id="exampleModalLabel"> Edit Note</h5>
              <button type="button" className="btn-close" data-bs-dismiss="modal" aria-label="Close" />
            </div>
            <div className="modal-body">
              <form className='my-3'>
                <div className="form-group">
                  <label htmlFor="exampleInputEmail1">Title</label>
                  <input type="text" className="form-control" id="etitle" name="etitle" aria-describedby="emailHelp" value={note.etitle} onChange={onChange} minLength ={5} required />
                </div>
                <div className="form-group">
                  <label htmlFor="exampleInputPassword1"> Description</label>
                  <input type="text" className="form-control" id="edescription" name="edescription" value={note.edescription} onChange={onChange}  minLength ={5} required/>
                </div>
                <div className="form-group">
                  <label htmlFor="exampleInputPassword1">  Tag</label>
                  <input type="text" className="form-control" id="etag" name="etag" value={note.etag} onChange={onChange} minLength ={5} required />
                </div>

              </form>
            </div>
            <div className="modal-footer">
              <button ref = {refClose}  type="button" className="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button disabled= {note.etitle.length< 5 || note.edescription.length < 5} type="button" className="btn btn-primary"  onClick={handleClick}> Update Note </button>
            </div>
          </div>
        </div>
      </div>




      <div className='row'>
        <h2>Your Notes</h2>
        <div className='container'>
          {notes.length===0 && 'No note to display'}
        </div>

     
        {
        // (!notes) ? 'no data': 
        
        // <Noteitem showAlert= {showAlert} updateNote={updateNote} key={note._id} note={note} />
        notes && notes.map((note) => {
          return <Noteitem showAlert= {showAlert} updateNote={updateNote} key={note._id} note={note} />;
        })
      }
      </div>

    </>)
}

export default Notes;
