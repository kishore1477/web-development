// import logo from './logo.svg';
import './App.css';
import About from './components/About';
import Navbar from './components/Navbar.js';
import Textform from './components/Textform';

import React, { useState } from 'react';
import Alert from './components/Alert';
import {
  BrowserRouter as Router,
  Routes,
  Route 
} from "react-router-dom";
import Home from './components/Home';


function App() {
  const [mode, setMode] = useState("light");
  const [alert, setAlert] = useState(null);
  const showAlert = (message, type) => {
    setAlert({
      msg: message,
      type: type
    })
    setTimeout(() => {
      setAlert(null);
    }, 2000);
  }
  const removeBodyClasses =()=>{
    document.body.classList.remove("bg-success");
    document.body.classList.remove("bg-danger");
    document.body.classList.remove("bg-primary");
    document.body.classList.remove("bg-secondary");
    document.body.classList.remove("bg-white");
    document.body.classList.remove("bg-dark");

  }
  // const [switchBtn, setSwitchBtn] = useState("Enable Dark Mode");//not work try later
  const toggleMode = (cls) => {
    removeBodyClasses();
    console.log(cls);
    document.body.classList.add('bg-' + cls);
    setMode("light");
    if (mode === 'light') {
      setMode("dark");
      document.body.style.backgroundColor = '#072c50';
      showAlert("Dark mode has been enabled", "success");
      document.title = "TextUtils - Dark Mode";
      // setSwitchBtn("Enable  Light Mode")
      setInterval(() => {
        document.title = "TextUtils  is Amazing";
      }, 1000);
      setInterval(() => {
        document.title = " install TextUtils  Now";
      }, 700);
    } else {
      setMode("light");
      // setSwitchBtn("Enable   Dark Mode")
      document.body.style.backgroundColor = 'white'
      showAlert(" Light mode has been enabled", "success")
      document.title = "TextUtils -   Light Mode"

    }

  }

  return (
    <>

      {/* string proptype */}
      {/* <Navbar  title = " TextUtilts2"  about = "about title"/>   */}
      {/* <Navbar  title ={45} about = "about title"/>  */}
      {/* <Navbar  title = "TextUtils" /> */}

      {/*  number proptype */}
      {/* <Navbar  title =  {12} about =  {34} />  */}
      {/* <Navbar  title =  {12} about =  "About" />  */}
      {/* <Navbar  title =  {13} />  */}
      {/* <Navbar  />  */}
<Router>
        <Navbar title="TextUtils" about="About" mode={mode} toggleMode={toggleMode} />
      <Alert alert={alert} />
      <div className='container my-5'>


      {/* <About />   */}
      <Routes>
          {/* <Route path="/about">
            <About />  
          </Route> */}
          <Route exact path="/" element={  <Home/>} />
          <Route exact path="/text" element={  <Textform heading="Enter the text to Analyzers" showAlert={showAlert} mode={mode} />} />
            <Route exact path="/about" element={<About about = "About Us"  mode={mode} /> } />
           
            {/* <Textform heading="Enter the text to Analyzers" showAlert={showAlert} mode={mode} /> */}
          {/* <Route path="/">
        <Textform heading="Enter the text to Analyzer" showAlert={showAlert} mode={mode} />
          </Route> */}
        </Routes>
 


      </div>


      </Router>


    </>
  );
}

export default App;
