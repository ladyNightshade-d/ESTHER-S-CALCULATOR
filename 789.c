#include <stdio.h>
int main (){
int x[5]= {6,9,5,4,8};
int t;
for ( t = 0 ; t < 5 ; t ++){
scanf("%d",&x[t]);
}
for ( t = 0 ; t < 5 ; t ++){
printf("%d\n",x[t]);
}
int minimum = x[0];
for (int i=0; i<5; i++){
    if (x[i] < minimum){
        minimum = x[i];
    }
}
printf("The minimum number is :%d\n",minimum);

int maximum = x[0];
for (int i=0; i<5; i++){
    if (x[i] > maximum){
        maximum = x[i];
    }
}
printf("The maximum number is :%d\n",maximum);

int sum = 0;
for (int i=0; i<5; i++){
    sum += x[i];
}
printf("The sum of the elements is :%d\n",sum);

int product =1;
for (int i=0; i<5; i++){
    product *= x[i];
}
printf("The product of all elements is :%d\n",product);

return 0;
}
