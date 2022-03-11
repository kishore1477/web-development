const express = require('express');
const router = express.Router();
const { body, validationResult } = require('express-validator');
const User = require('../models/User')
var bcrypt = require('bcryptjs');
var jwt = require('jsonwebtoken');
const fetchuser = require('../middleware/fetchuser');

const JWT_SECRET  = "kishoreisgoodboy";


//  Route 1:create a user using post '/api/auth/createuser'
router.post('/createuser', [
  body('name', 'Enter a valid name').isLength({ min: 3 }),
  body('email', 'Enter a valid email').isEmail(),
  body('password', 'Enter a valid password').isLength({ min: 5 }),

], async (req, res) => {
let success = false;
  // if the error return bad request 
  const errors = validationResult(req);
  if (!errors.isEmpty()) {
    return res.status(400).json({ success, errors: errors.array() });
  }
  //  check whether the user  with  this email exist already
  try {

    let user = await User.findOne({ email: req.body.email });

    if (user) {
      return res.status(400).json({success, error: 'sorry a user with this email already exists' });

    }
    const salt = await bcrypt.genSalt(10);

    const secPass = await bcrypt.hash(req.body.password, salt)
     //  create a new user
    user = await User.create({
      name: req.body.name,
      password:  secPass,
      email: req.body.email,
    })
    const data = {
      user : {
        id : user.id
      }
    }
const  authToken = jwt.sign(data, JWT_SECRET);
console.log(authToken);

    console.log(user);
    // res.json(user)
     success = true;
    res.json({success, authToken});
    // catch error
  } catch (error) {
    console.error(error.message);
    res.status(500).send(success,"Some error occured");
  }

  //     .then(user=> res.json(user))
  //        .catch(err=> {console.log(err)
  //       res.json({error:'Please Enter a  unigue email', message : err.message})
  //       });
  // //  console.log(req.body);
  // //  const user = User(req.body);
  // //  user.save();
  // //  res.send("hello");
})

//  Route 2: Authenticate a user  using post '/api/auth/login'
router.post('/login', [
  body('email', 'Enter a valid email').isEmail(),
  body('password', 'Password can not be blank').exists(),

], async (req, res) => {
  let success = false

  // if the error return bad request 
  const errors = validationResult(req);
  if (!errors.isEmpty()) {
    return res.status(400).json({ errors: errors.array() });
  }
  //  check whether the user  with  this email exist already
  const {email , password} = req.body
  try {

    let user = await User.findOne({email});

    if (!user) {
      success = false
      return res.status(400).json({ success, error: ' email Please try to login correct credential' });
      
    }
    const comparePassword = await bcrypt.compare(password, user.password);
    if(!comparePassword){
      success = false

      return res.status(400).json({success, error: ' password Please try to login correct credential' });

    }
    const data ={
      user : {
        id : user.id
      }
    }
    const  authToken = jwt.sign(data ,JWT_SECRET )
    success = true
    res.json({success, authToken});
  } catch (error) {
    console.error(error.message);
    res.status(500).send("Some error occured");
  }
})


//  Route 3: get loggedin  user detials using post '/api/auth/getuser'  - login required
router.post('/getuser',  fetchuser, async (req, res) => {

  // if the error return bad request 
  const errors = validationResult(req);
  if (!errors.isEmpty()) {
    return res.status(400).json({ errors: errors.array() });
  }
  //  check whether the user  with  this email exist already
  
  try {

     userId  =  req.user.id
     const user = await User.findById(userId).select("-password");
res.json(user);
  } catch (error) {
    console.error(error.message);
    res.status(500).send("Some error occured");
  }
})
module.exports = router;
