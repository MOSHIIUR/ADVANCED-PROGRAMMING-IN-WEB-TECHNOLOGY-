import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom/client';
import axios from "axios";


/* const initialValues = {
    name: "",
    id: "",
    mail: "",
    phone: "",
}; */

function Register() {

    const [name, setName] = useState("")
    const [id, setId] = useState("")
    const [mail, setMail] = useState("")
    const [phone, setPhone] = useState("")
    const [pass, setPass] = useState("")

    /* const [values, setValues] = useState(initialValues);

    const handleInputChange = (e) => {
        const { name, value } = e.target;
        setValues({
          ...values,
          [name]: value,
        });
      }; */

      function handleSubmit(e) {
        e.preventDefault();
        const obj = {name, id, mail, phone, pass};
        console.log(obj);
      
        
        axios.post("http://localhost:8000/api/register", obj)
        .then(response =>{
            //console.log(response);
            alert("Success!");
            window.location.reload();
           
            
            
        })
        .then(error=>{
            console.log(error);
            //alert("Error!");
        })

      }


    /* useEffect(() => {
        //Runs only on the first render
        axios.post("http://localhost:8000/api/register")
        .then((response)=>
        console.log("Response: ", response)
        );

      }, []); */


    
    return (

        <div id='register' className ='container'>
            <form className="registration" onSubmit={handleSubmit}>
                    <h1>Admin Registration</h1>

                    <input 
                        type="text" 
                        placeholder='name' 
                        //onChange={handleInputChange} 
                        onChange={(e)=>setName(e.target.value)} 
                        value={name}
                    /><br/>
                    <input 
                        type="text" 
                        placeholder='id' 
                        //onChange={handleInputChange} 
                        onChange={(e)=>setId(e.target.value)} 
                        value={id}
                    /><br/>
                    <input 
                        type="text" 
                        placeholder='mail' 
                        //onChange={handleInputChange} 
                        onChange={(e)=>setMail(e.target.value)} 
                        value={mail}
                    /><br/>
                    <input 
                        type="number" 
                        placeholder='phone' 
                        //onChange={handleInputChange} 
                        onChange={(e)=>setPhone(e.target.value)} 
                        value={phone}
                    /><br/>
                    <input 
                        type="text" 
                        placeholder='pass' 
                        //onChange={handleInputChange} 
                        onChange={(e)=>setPass(e.target.value)} 
                        value={pass}
                    /><br/>
                    
{/*                     <input type="text" placeholder='id' onChange={handleInputChange} value={values.id}/><br/>
                    <input type="email" placeholder='mail' onChange={handleInputChange} value={values.mail}/><br/>
                    <input type="number" placeholder='phone' onChange={handleInputChange} value={values.phone}/><br/>
 */}
                    <input type="submit" name="submit" value="submit"/><br/>
            </form>
        </div>
        
    );
}

export default Register;

if (document.getElementById('register')) {
    const Index = ReactDOM.createRoot(document.getElementById("register"));
    

    Index.render(
        <React.StrictMode>
            <Register/>
        </React.StrictMode>
    )
}
