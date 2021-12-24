//curd operations

const mongodb=require("mongodb")
const MongoClient=mongodb.MongoClient

const connectionURL='mongodb://127.0.0.1:27017';
const databaseName='task-manager'
const ObjectID=mongodb.ObjectID;

const newId=new ObjectID();

MongoClient.connect(connectionURL,{useNewUrlParser:true,useUnifiedTopology: true },(error,client)=>{
    if(error){
       console.log("Not Connected");
       return
    }

    const db=client.db(databaseName);

    
    db.collection('tasks').findOne({_id:ObjectID("61c5484731b4c629b132076f")},(error,result)=>{
        if(!error){
            console.log(result);
            return
        }
        console.log(error)

    })

    db.collection("tasks").find({"completed":false}).toArray((error,result)=>{
        if(error){
            console.log(error);
            return
        }
        console.log(result);
    })
    
})