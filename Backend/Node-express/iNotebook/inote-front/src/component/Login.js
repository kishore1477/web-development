import React,  {useState} from 'react';
import {useNavigate} from 'react-router-dom';
const Login = (props) => {
  const {showAlert} = props

    const [credentials, setCredentials] = useState({email: "", password: ""});
    const navigate = useNavigate();
    const handleSubmit = async (e)=>{
e.preventDefault();
const response = await fetch(`http://localhost:5000/api/auth/login`, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json' 
    },
    body: JSON.stringify({email: credentials.email, password: credentials.password})
  });
   const  json =  await response.json();
   console.log(json);
   if(json.success){
// alert("Success");
// localStorage.setItem('token', json.authtoken)
localStorage.setItem('token',  JSON.stringify(json))
let  token = localStorage.getItem('token');

console.log("stored login auth token"+token)
showAlert(" Login Successfully", 'success')
navigate('/')
   }else{
    //  alert("Invalid Credentials");
    showAlert("Invalid Credentials ", 'danger')
   }
}
const onChange= (e)=>{
  setCredentials({...credentials, [e.target.name ] : e.target.value})
 }
  return <div className='container'>
      <form onSubmit={handleSubmit}>
  <div className="form-group my-3">
    <label htmlFor="exampleInputEmail1">Email address</label>
    <input type="email" className="form-control" id="email" name='email' aria-describedby="emailHelp" onChange={onChange} value={credentials.email} placeholder="Enter email" />
  </div>
  <div className="form-group my-3">
    <label htmlFor="exampleInputPassword1">Password</label>
    <input type="password" className="form-control" id="password" name='password' onChange={onChange}   value={credentials.password} placeholder="Password" />
  </div>
  
  <button type="submit" className="btn btn-primary my-2">Submit</button>
</form>

  </div>;
};

export default Login;
