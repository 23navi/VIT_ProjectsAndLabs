// const call=(callback)=>{
//     setTimeout(() => {
//         callback("navi");
//     }, 2000);

//     return callback("sureka");
// }

// call((e)=>{
//     console.log(e);
// })


function doSomethingAsynchronous(abc) {
    new Promise((resolve,rej) => {
      console.log(abc);
      resolve(abc+"naviiii");
      
    });
    console.log("end of function");
  }
  doSomethingAsynchronous("navi").then(resolve=>{
      console.log(resolve);
  }).catch(reject=>{
      console.log(reject)
  })
  console.log("b");
