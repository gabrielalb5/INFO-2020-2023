#include<stdio.h>

int main(){
	int a1,a2,a3;	
	
	int t1,t2,t3;
	
	int menor;
		
	scanf("%d %d %d",&a1,&a2,&a3);
	
	t1 = 4 * a3 + 2 * a2;
	t2 = 2 * a1 + 2 * a3;
	t3 = 4 * a1 + 2 * a2;
	
	if(t1 < t2){
		menor = t1;
	}else{
		menor = t2;
	}
	
	if(menor > t3){
		menor = t3;
	}
	
	printf("%d",menor);
	
	
	return 0;
}
