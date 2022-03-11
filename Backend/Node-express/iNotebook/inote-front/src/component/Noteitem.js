import React, {useContext} from 'react';
import NoteContex from '../contex/notes/NoteContex';

const Noteitem = (props) => {
    const {showAlert} = props
    const context = useContext(NoteContex);
    const { deleteNote} = context;
    const { note,updateNote } = props
    return <div className="col-md-4" >

        <div className="card  my-3" >
            <div className="card-body">
                <div className='d-flex align-items-center'>
                    <h5 className="card-title"> {note.title}</h5>
                    <div>
                        <i className="fas fa-trash-alt mx-2" onClick={()=>{deleteNote(note._id); showAlert("Note Deleted Successfully", 'success')}}  />
                        <i className="fas fa-edit mx-2" onClick={()=>{updateNote(note)}} />
                    </div>

                </div>
                <p className="card-text" > {note.description}
                </p>

            </div>
        </div>
    </div>



};

export default Noteitem;
