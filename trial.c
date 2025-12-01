#include <stdio.h>
int main(){
int age[10]={34,12,56,76,99,23,56,78,89,34};
int maximum = age[0];
int minimum = age[0];
for (int i=1; i<10; i++){
if (age[i] > maximum){
maximum = age[i];
}
}
printf("Maximum number is %d\n",maximum);
for (int i=1; i<10; i++){
if (age[i] < minimum){
minimum = age[i];
}
}
printf("Minimum number is %d\n",minimum);



return 0;
}
