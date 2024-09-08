#include <stdio.h>
int main(){
	
	int npos, nneg, n, i;
	
	npos = 0;
	nneg = 0;
	
	for(i = 1; i <= 6; i++){
		scanf("%d",&n);
		
		if(n > 0){
			npos++;
		}else{
			nneg++;
		}
	}
		
	printf ("Quantidade de numeros positivos %d\n", npos);
	return 0;
}
