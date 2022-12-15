import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom/client';
import axios from "axios";

function User_list() {

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
        
    );
}

export default User_list;

if (document.getElementById('list-of-user')) {
    const Index = ReactDOM.createRoot(document.getElementById("list-of-user"));

    Index.render(
        <React.StrictMode>
            <User_list/>
        </React.StrictMode>
    )
}
