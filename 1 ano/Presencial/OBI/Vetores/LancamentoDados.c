#include <stdio.h>
int main(){
	
	int n, dado, maior;
	int v[13];
	int i;
	maior=-1;
	
	scanf("%d",&n);
	
	for(i=0;i<13;i++){
		v[i]=0;
	}
	
	for(i=0;i<n;i++){
		scanf("%d",&dado);
		v[dado]++;
	}
	
	for(i=1;i<13;i++){
		if(v[i]>maior){
			maior=v[i];
		}
	}
	for (i=1; i<13; i++){
		if(v[i]==maior){
			printf("%d",i);
		}
	}
	return 0;
}
