import React,  {useState}  from 'react';
import {useNavigate} from 'react-router-dom';


const Signup = (props) => {
  const {showAlert} = props
  const [credentials, setCredentials] = useState({ name:"", email: "", password: "", cpassword: ""});
  const navigate = useNavigate();
    const handleSubmit = async (e)=>{
e.preventDefault();
const {name, email,password} = credentials
const response = await fetch('http://localhost:5000/api/auth/createuser', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json' 
    },
    body: JSON.stringify({ name, email , password})
  });
   const  json =  await response.json();
   console.log(json);
   if(json.success){
// alert("Success");
// localStorage.setItem('token', json.authtoken)
localStorage.setItem('token',  JSON.stringify(json))
let  token = localStorage.getItem('token');

console.log("stored login auth token"+token)
navigate('/')
showAlert(" Account Created Successfully", 'success')
   }else{
    //  alert("Invalid Credentials");
    showAlert("Invalid Credentials", 'danger')
   }
}
const onChange= (e)=>{
  setCredentials({...credentials, [e.target.name ] : e.target.value})
 }
  return <div className='container'>
     <form  onSubmit={handleSubmit}>
  <div className="form-group">
    <label htmlFor="name"> Name</label>
    <input type="text" className="form-control" id="name" name='name' aria-describedby="emailHelp" placeholder="Enter  name" value={credentials.name}onChange ={onChange}  />
  </div>
  <div className="form-group">
    <label htmlFor="email">Email address</label>
    <input type="email" className="form-control" id="email" name='email' aria-describedby="emailHelp" placeholder="Enter email" onChange ={onChange} required/>
    <small id="emailHelp" className="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div className="form-group">
    <label htmlFor="password">Password</label>
    <input type="password" className="form-control" id="password" name='password' placeholder="Password" onChange ={onChange} required minLength={5}/>
  </div>
  <div className="form-group">
    <label htmlFor="cpassword"> Confirm Password</label>
    <input type="password" className="form-control" id="cpassword" name='cpassword' placeholder=" Again Password" onChange ={onChange} required minLength={5}/>
  </div>
 
  <button type="submit" className="btn btn-primary">Submit</button>
</form>

  </div>;
};

export default Signup;
