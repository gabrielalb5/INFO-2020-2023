#include <stdio.h>
int main(){
	
	int i, s=0;
	int num[10],dobro[10];
	for(i=0;i<3;i++){
		num[i]=i+1;
	}
	for(i=0;i<3;i++){
		dobro[i]=num[i]*2;
	}
	for(i=0;i<3;i++){
		printf("num[%d]=%d  dobro[%d]=%d\n", i,num[i],i,dobro[i]);
	}
	
	getch();
	return 0;
}
