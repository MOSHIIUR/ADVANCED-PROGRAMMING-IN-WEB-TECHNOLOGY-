import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom/client';
import axios from "axios";
import { map } from 'lodash';

function User_list() {

    const [myData, setMydata] = useState([]);

    useEffect(() => {
        //Runs only on the first render
        axios.get("http://localhost:8000/api/users")
        .then((response)=>
        //console.log(response.data)
        setMydata(response.data) 
        );

      }, []); 

      function deleteRow(id, e){
        console.log(id);
        axios.delete(`http://localhost:8000/api/delete/${id}`)  
          .then(res => {  
            console.log(res.data);  
            //setMydata(response.data) ;
            window.location.reload();
 
          })  
        
      }  


    return (

            <div id="list-of-user" class="container">
               
                <table class="list"> 
                    <tr>
                        <td colspan="3"> <h1>List Of User</h1></td>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Operation</th>
                    </tr>
                    {
                    myData.map((post)=>{
                        const{u_id, u_name} = post;
                        return(
                                
                    <tr>
                            <td>{u_id}</td>
                            <td>{u_name}</td>
                            <td> <button className="btn btn-danger" onClick={(e) => deleteRow(u_id, e)}>Delete</button> </td>

                    </tr>
                        );
                    })
                    }
                </table>
            </div>


        

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
