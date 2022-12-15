import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom/client';
import axios from "axios";
import { map } from 'lodash';

function Update() {

    useEffect(() => {
        //Runs only on the first render
        axios.get("http://localhost:8000/api/user")
        .then((response)=>
        //console.log(response.data)
        setMydata(response.data) 
        );

      }, []); 
/* 
    const [name, setName] = useState("")
    const [id, setId] = useState("")
    const [mail, setMail] = useState("")
    const [phone, setPhone] = useState("")
    const [pass, setPass] = useState("")
 */

      function handleSubmit(e) {
        e.preventDefault();
        const obj = {name, id, mail, phone, pass};
        console.log(obj);
        
        axios.post("http://localhost:8000/api/register", obj)
        .then(response =>{
            console.log(response);
            
        })
        .then(error=>{
            console.log(error);
        })

      }


    
    return (

        myData.map((post)=>{
            const{id, username, email, pass, phone, image} = post;
            return(
                <div class="container">
                <div class="heading"><h1>UPDATE</h1></div>
                <form>
    
                    <label>ID:</label>
                    <label>{id}</label>
                    <br/>
    
                    <label>User Name:</label><br/>
                    <input type="text" name='name' value={username}/>
                    <br/>
    
                    <label>Mail:</label><br/>
                    <input type="email" name='mail' value={email}/>
                    <br/>
    
    
                    <label>Add image</label><br/>
                    <img src={ url('public/image/'.image) } class="circle"/>       
    
                    <label><input type="file" required name="image"/></label>
                    <br/>
    
    
    
                    <label>Password:</label><br/>
                    <input type="Password" name='pass' value={pass}/>
                    <br/>
    
                    <hr/>
    
                    <input type="submit" value="Update"/>
    
                </form>
            </div>
    
            );
        })

        
    );
}

export default Update;

if (document.getElementById('update')) {
    const Index = ReactDOM.createRoot(document.getElementById("update"));
    

    Index.render(
        <React.StrictMode>
            <Update/>
        </React.StrictMode>
    )
}
