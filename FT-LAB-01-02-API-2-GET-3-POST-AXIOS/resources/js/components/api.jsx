import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom/client';
import axios from "axios";
import { map } from 'lodash';

function Api_request() {

    const [myData, setMydata] = useState([]);

    useEffect(() => {
        //Runs only on the first render
        axios.get("http://localhost:8000/api/api")
        .then((response)=>
        //console.log(response.data)
        setMydata(response.data) 
        );

      }, []); 

      function deleteRow(id, e){
        console.log(id);
        axios.delete(`http://localhost:8000/api/delete_api/${id}`)  
          .then(res => {  
            console.log(res.data);  
            //setMydata(response.data) ;
            window.location.reload();
 
          })  
        
      }  


    return (

            <div id="list-of-request" class="container">
               
                <table class="list"> 
                    <tr>
                        <td colspan="3"> <h1>Request User</h1></td>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Mail</th>
                    </tr>
                    {
                    myData.map((post)=>{
                        const{id, mail} = post;
                        return(
                                
                    <tr>
                            <td>{id}</td>
                            <td>{mail}</td>
                            <td> <button className="btn btn-success" onClick={(e) => deleteRow(id, e)}>Send Token</button> </td>
                            <td> <button className="btn btn-danger" onClick={(e) => deleteRow(u_id, e)}>Denied</button> </td>

                    </tr>
                        );
                    })
                    }
                </table>
            </div>


        

    );
}

export default Api_request;

if (document.getElementById('list-of-request')) {
    const Index = ReactDOM.createRoot(document.getElementById("list-of-request"));

    Index.render(
        <React.StrictMode>
            <Api_request/>
        </React.StrictMode>
    )
}
