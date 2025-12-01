#include <stdio.h>
int main(){
int marks[5]={2,4,6,7,8};
int minimum=marks[0];

for (int i=0; i<5; i++){

if(marks[i] < minimum){
minimum=marks[i];
}

}

printf("%d \n ",minimum);


return 0;
}
