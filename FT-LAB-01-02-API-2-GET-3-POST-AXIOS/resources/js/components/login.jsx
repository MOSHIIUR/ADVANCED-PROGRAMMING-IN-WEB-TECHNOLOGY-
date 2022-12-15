import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom/client';
import axios from "axios";

function Login() {

    const [id, setId] = useState("")
    const [pass, setPass] = useState("")

    function handleSubmit(e) {
        e.preventDefault();
        const obj = {id, pass};
        console.log(obj);
        
        axios.post("http://localhost:8000/api/login", obj)
        .then(response =>{
            console.log(response);
            
        })
        .then(error=>{
            console.log(error);
        })

      }




    return (
        <div>
            <form onSubmit={handleSubmit}>
                    <h2>Admin Login</h2>
                    <p id="intro">Login with your organizational ID and Password</p>
                    <div>
                    <input 
                        type="text" 
                        placeholder='id' 
                        onChange={(e)=>setId(e.target.value)} 
                        value={id}
                    /><br/>
					</div>
					<div>
                    <input 
                        type="text" 
                        placeholder='pass' 
                        //onChange={handleInputChange} 
                        onChange={(e)=>setPass(e.target.value)} 
                        value={pass}
                    /><br/>
                    </div>
                        
                        <input type="submit" class='login' value='Login'/><br/>
                </form>

        </div>
    );
}

export default Login;

if (document.getElementById('login')) {
    const Index = ReactDOM.createRoot(document.getElementById("login"));

    Index.render(
        <React.StrictMode>
            <Login/>
        </React.StrictMode>
    )
}
