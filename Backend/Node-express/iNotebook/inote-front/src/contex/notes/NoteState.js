
import NoteContex from './NoteContex';
// import React, { useState  } from 'react';
import React, { useState } from 'react';

const NoteState = (props) => {

  const host = 'http://localhost:5000'

  const notesInitial = []

  const [notes, setNotes] = useState(notesInitial);



  // get notes

  const getNote = async () => {
    //   TODO : API CALL

    const response = await fetch(`${host}/api/notes/fetchallnotes`, {
      method: 'GET',
      headers: {
        'Content-Type': 'application/json',
        'auth-token':    localStorage.getItem('token')
      }
    });
     const json = await response.json();
    console.log(json);
    setNotes(json)
     
  }
  // Add  a note

  const addNote = async (title, description, tag) => {
    //   TODO : API CALL

    const response = await fetch(`${host}/api/notes/addnotes`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'auth-token':    localStorage.getItem('token')
      },
      body: JSON.stringify( {title,description,tag})
    });
     const note =  await response.json();
      
    setNotes(notes.concat(note))
  }
  // delete a note
  const deleteNote = async (id) => {
    //   TODO : API CALL
    const response = await fetch(`${host}/api/notes/deletenotes/${id}`, {
      method: 'DELETE',
      headers: {
        'Content-Type': 'application/json',
        'auth-token':    localStorage.getItem('token')
      }
      
    });
    const json = response.json()
    console.log(json);
    console.log("Deleting the note with id is " + id);
    const newNotes = notes.filter((note) => { return note._id !== id })
    setNotes(newNotes)

  }
  // edit a note
  const editNote = async (id, title, description, tag) => {
    // API call

    const response = await fetch(`${host}/api/notes/updatenotes/${id}`, {
      method: 'PUT',
      headers: {
        'Content-Type': 'application/json',
        'auth-token':    localStorage.getItem('token')
      },
      body: JSON.stringify( {title,description,tag})
    });
     const json = response.json();
     console.log(json);
     // logic for editing note
      let newNote =   JSON.parse(JSON.stringify(notes))
 
 console.log( "This is newNote"+ newNote);
    for (let index = 0; index < newNote.length; index++) {
      const element =  newNote[index];
      if (element._id === id) {
        newNote.title = title;
        newNote.description = description;
        newNote.tag = tag;

        break;
      }

    }
    console.log("This is below newNote"+ newNote);
    setNotes(newNote)
  }


 

  return (
    // <NoteContex.Provider  value = {{state, update}}>

    <NoteContex.Provider value={{ notes, addNote, deleteNote, editNote, getNote }}>
      {props.children}

    </NoteContex.Provider>
  )
}
export default NoteState;