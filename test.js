
// const asyncfunc=()=>{
//     return new Promise((r,rr)=>{
//         setTimeout(() => {
//             r("hello");
//         }, 2000);
        
//     })
// }
// const navi= async()=>{
//     await asyncfunc().then(r=>{console.log(r)});
//     console.log("navii");
// }
// navi();
// console.log("end");




const neww=()=>{
    return new Promise((res,rej)=>{
        rej("hellooo");

    })
}

const a=async()=>{
    try{
        const aa=await neww()
    }catch(e){
        console.log(e+"asdfasf")
    }
    
}

a();



// const newTestPromise=()=>{
//     return new Promise((r,rr)=>{
//         r((3,4,5));
//     })
// }

// newTestPromise().then(r=>{
//     console.log(r);
// })


// const fun=(a,b,callback)=>{
//     callback({a:23,b:45,c:423});
// }

// fun(23,43,({a,b,c,d})=>{
//     console.log(a,b,c,d);
// })