
import './App.css';
import { Navbar } from './component/Navbar';
import { Home } from './component/Home';
import { About } from './component/About';
import {
  BrowserRouter as Router,
  
  Route,
  
  Routes
} from "react-router-dom";
import NoteState from './contex/notes/NoteState';
import Login from './component/Login';
import Signup from './component/Signup';
import Alert from './component/Alert';
import { useState } from 'react';
function App() {
  const [alert, setAlert] = useState(null);
  const showAlert = (message,type)=>{
setAlert({
  msg: message,
  type:type
})
setTimeout(() => {
  setAlert(null)
},  1500);
  }
  return (
    <>
<NoteState>
      <Router>
        <Navbar />
        <Alert alert ={alert}/>
<div className='container my-3'>
        <Routes>
          <Route exact path="/" element={<Home  showAlert ={showAlert}/>} />
          <Route exact path="/about" element={<About />} />
          <Route exact path="/login" element={<Login  showAlert ={showAlert} />} />
          <Route exact path="/signup" element={<Signup  showAlert ={showAlert} />} />
        </Routes>
        </div>
      </Router>

      </NoteState>





    </>
  );
}

export default App;
