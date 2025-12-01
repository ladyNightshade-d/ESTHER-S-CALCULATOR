#include <stdio.h>
int main(){
int  q;
int i;
for(i=1 ; i<=12 ; i++){
for (q=1 ; q<=12 ; q++){
printf("%2d x %2d = %-3d      ", q , i , i * q);
if (q % 4 == 0) printf("    ");}
printf("\n");
}
return 0;
}
