//#include <stdio.h>
//#include <math.h>
//int main (){
//int i ;
//printf("Enter a number:");
//scanf("%d",&i);
//int answer = pow (i,2);
//printf("The square of this number is: %d\n", answer);
//
//
//
//
//
//return 0;
//}

#include <stdio.h>
#include <math.h>
int add(int a, int b){
return a+b;
}
int square(int w, int e){
int product = 1;
for (int i =1; i<=e;i++){

 product=product * w;
}
return product;
}
int main (){
    int prod = square(4,2);
    printf("%d \n", prod);


//int num;
//int pow;
//int sqr;
//printf("Enter a number:");
//scanf("%d",&num);
//printf("Enter it's exponent:");
//scanf("%d",&pow);
////for (int i= 1,  ,++);
//
//printf("The square of this number is: %d\n", answer);
//
//



return 0;
}

