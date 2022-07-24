// we can directly run openmp code. 
// This cloud device has 2 core
// 

//OpenMP header
#include <omp.h>
#include <iostream>
using namespace std;


int main()
{
	
	#pragma omp parallel
{
  //Parallel region code 
	
	cout<<"Hello World"<<endl;
} 
	return 0;
	
}



// we can set the number of threads to execute the program using the external variable. 
//export OMP_NUM_THREADS=5

//compile openMP file 
// g++ -o navi -fopenmp navi.cpp

// to run ./navi

//run the compiled file
