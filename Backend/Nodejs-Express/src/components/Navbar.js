


import React from 'react';
// import PropTypes from 'prop-types';
import { Link } from 'react-router-dom';
// import { NavLink } from 'react-router-dom';

export default function Navbar(props) {


  return (
  
  
    <nav className={`navbar navbar-expand-lg navbar-${props.mode} bg-${props.mode}`}>
  <div className="container-fluid">
    <Link className="navbar-brand" to = "/text">{props.title}  </Link>
    {/* <a className="navbar-brand" href = "#">{props.title}  </a> */}
    <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span className="navbar-toggler-icon"></span>
    </button>
    <div className="collapse navbar-collapse" id="navbarSupportedContent">
      <ul className="navbar-nav me-auto mb-2 mb-lg-0">
        <li className="nav-item">
          {/* <a className="nav-link active" aria-current="page" href = "#">Home</a> */}
          <Link className="nav-link active"  activestyle={{
    fontWeight: "bold",
    color: "red"
  } } aria-current="page" to = "/">Home</Link>
        </li>
        <li className="nav-item">
          {/* <a className="nav-link" href = "/About">{props.about} </a>  */}
          {/* <Link style={{color : "red"}} className="nav-link" to = "/about"> {props.about}  */}
          {/* <NavLink   activestyle={{
    fontWeight: "bold",
    color: "red"
  }} className="nav-link" to = "/about"> {props.about} 
          </NavLink> */}
          {/* <NavLink  style={isActive => ({
    color: isActive ? "red" : "blue"
  }) }className="nav-link" to = "/about"> {props.about} 
          </NavLink> */}
          {/* <NavLink activeStyle={{color : "red"}} className="nav-link" to = "/about"> {props.about} 
          </NavLink> */}
          <Link className="nav-link" to = "/about"> {props.about} 
          </Link>
        </li>
       
      </ul>

      <div className='d-flex'>
        <div className='bg-primary rounded mx-2' onClick={()=>{props.toggleMode('primary')}} style={{height: '30px', width: '30px', cursor:'pointer' }}></div>
        <div className='bg-success rounded mx-2' onClick={()=>{props.toggleMode('success')}} style={{height: '30px', width: '30px', cursor:'pointer' }}></div>
        <div className='bg-danger rounded mx-2' onClick={()=>{props.toggleMode('danger')}} style={{height: '30px', width: '30px', cursor:'pointer' }}></div>
        <div className='bg-secondary rounded mx-2' onClick={()=>{props.toggleMode('secondary')}} style={{height: '30px', width: '30px', cursor:'pointer' }}></div>
        <div className='bg-white rounded mx-2' onClick={()=>{props.toggleMode('white')}} style={{height: '30px', width: '30px', cursor:'pointer' }}></div>
        <div className='bg-dark rounded mx-2' onClick={()=>{props.toggleMode('dark')}} style={{height: '30px', width: '30px', cursor:'pointer' }}></div>
      </div>
      {/* <form className="d-flex">
        <input className="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button className="btn btn-outline-success" type="submit">Search</button>
      </form> */}
      {/* i have remove toggle btn temporary  due to not working properly but i can use it by appling some custom logic of js  */}
      {/* <div className={`form-check form-switch text-${props.mode === 'light'?'dark':'light'}`} >
  <input className="form-check-input" type="checkbox"  onClick= {props.toggleMode} 
        id="flexSwitchCheckDefault"/>
  <label className="form-check-label" htmfor="flexSwitchCheckDefault"> Enable Dark Mode  </label>
</div> */}
    </div>
  </div>
</nav>

  )
}
// String proptype
// Navbar.propTypes = {title: PropTypes.string.isRequired,
//                      about: PropTypes.string.isRequired
//       }
// Navbar.defaultProps = {
//     title : "Set title here",
//     // about: "Set about here"
//     about: "About"
// }


// // number proptype
// Navbar.propTypes = {title: PropTypes.number.isRequired,
//                      about: PropTypes.number.isRequired
//       }
// Navbar.defaultProps = {
//     title :   1,
//     // about: "Set about here"
//     about: 2
// }


// //  object proptype
// Navbar.propTypes = {title: PropTypes.object.isRequired,
//                      about: PropTypes.object.isRequired    
//       }
// Navbar.defaultProps = {
//     title :   1,
//     // about: "Set about here"
//     about: 2
// }


 
