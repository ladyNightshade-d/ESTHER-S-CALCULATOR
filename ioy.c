#include <stdio.h>
int main(){
int marks[10]={1,2,3,45,67,89,97,21,87,90};
int max=marks[0];
for (int i=0; i < 10; i++){
if(marks[i] > max){
max=marks[i];
}

}
printf("The maximum number is %d",max);



return 0;
}
