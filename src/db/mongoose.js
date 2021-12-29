const mongoose=require("mongoose");
mongoose.connect("mongodb://127.0.0.1:27017/task-manager-api",{
    useNewUrlParser:true
})

const User=mongoose.model("User",{
    name:{
        type:String
    },
    age:{
        type:Number
    }
})

const user1=new User({
    name: "Navi",
    age: 20
})

// user1.save().then((user)=>{
//     console.log(user);
// }).catch((e)=>{
//     console.log(e);
// })




const Task=mongoose.model("Task",{
    decription:{
        type:String
    },
    completed:{
        type: Boolean
    }
})


const task1=Task({
    decription: "Task 1",
    completed: true
})

task1.save().then(r=>{
    console.log(r);
}).catch(e=>{
    console.log("eerre");
})








