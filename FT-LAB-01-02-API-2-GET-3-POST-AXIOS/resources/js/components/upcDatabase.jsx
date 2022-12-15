import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom/client';
import axios from "axios";

import { map } from 'lodash';

function UPC_list() {

    const [myData, setMydata] = useState([]);
    const [name, setName] = useState("")
    const [upc, setUpc] = useState("")
    const [amount, setAmount] = useState("")
    const [emission, setEmission] = useState("")
    const [impact, setImpact] = useState("")
    //const [image, setFile] = useState("")
 

    function handleSubmit(e) {
        e.preventDefault();
        const obj = {name, upc, amount, emission, impact};
        console.log(obj);
        
        axios.post("http://localhost:8000/api/insert_upc", obj)
        .then(response =>{
            console.log(response);
            window.location.reload();
            
        })
        .then(error=>{
            console.log(error);
        })

      }

    useEffect(() => {
        //Runs only on the first render
        axios.get("http://localhost:8000/api/upc")
        .then((response)=>
        //console.log(response.data)
        setMydata(response.data) 
        );

      }, []); 

      function deleteRow(upc, e){
        console.log(upc);
        axios.delete(`http://localhost:8000/api/delete_upc/${upc}`)  
          .then(res => {  
            console.log(res.data);  
            //setMydata(response.data) ;
            window.location.reload();
 
          })  
        
      }  


    return (
        


            <div id="list-of-upc" class="container">
            <form className="registration" onSubmit={handleSubmit}>


               
                <table class="list"> 
                    <tr>
                        <td colspan="3"> <h1>UPC Database</h1></td>
                    </tr>

                    <tr>    
                        <td><input 
                        type="text" 
                        placeholder='name' 
                        //onChange={handleInputChange} 
                        onChange={(e)=>setName(e.target.value)} 
                        value={name}
                        /></td>
                        <td><input 
                        type="text" 
                        placeholder='UPC code' 
                        //onChange={handleInputChange} 
                        onChange={(e)=>setUpc(e.target.value)} 
                        value={upc}
                        /></td>
                        <td><input 
                        type="number" 
                        placeholder='amount in kg' 
                        //onChange={handleInputChange} 
                        onChange={(e)=>setAmount(e.target.value)} 
                        value={amount}
                        /></td>
                    </tr>

                    <tr>    
                        <td><input 
                        type="number" 
                        placeholder='emission' 
                        //onChange={handleInputChange} 
                        onChange={(e)=>setEmission(e.target.value)} 
                        value={emission}
                        /></td>
                        <td><input 
                        type="text" 
                        placeholder='imace' 
                        //onChange={handleInputChange} 
                        onChange={(e)=>setImpact(e.target.value)} 
                        value={impact}
                        /></td>
                        {/* <td><input 
                        type="file"
                        //onChange={handleInputChange} 
                        onChange={(e)=>setFile(e.target.files[0])} 
                        //value={file}
                        /></td> */}
                    </tr>
                    <tr>
                    <td> <button className="btn btn-success" onClick={(e) => deleteRow(u_id, e)}>Insert New</button> </td>
                    </tr>


                    <tr>
                        <th>Name</th>
                        <th>UPC</th>
                        <th>Impact</th>
                    </tr>
                    {
                    myData.map((post)=>{
                        const{name, upc, impact} = post;
                        return(
                                
                    <tr>
                            <td>{name}</td>
                            <td>{upc}</td>
                            <td>{impact}</td>
                            <td> <button className="btn btn-info" onClick={(e) => deleteRow(u_id, e)}>Update</button> </td>
                            <td> <button className="btn btn-danger" onClick={(e) => deleteRow(upc, e)}>Delete</button> </td>
                    </tr>
                        );
                    })
                    }

                </table>
                </form>
            </div>


        

    );
}

export default UPC_list;

if (document.getElementById('list-of-upc')) {
    const Index = ReactDOM.createRoot(document.getElementById("list-of-upc"));

    Index.render(
        <React.StrictMode>
            <UPC_list/>
        </React.StrictMode>
    )
}
