#include <stdio.h>
int main(){
	
	int P, N, F, i;
	
	scanf("%d %d", &P, &N);
	
	for(i=0;i<N;i++){
		scanf("%d", &F);
		P= P+F;
		if (P>100){
		    P=100;
		}else if (P<0){
			P=0;
		}
	}
	
	printf("%d", P);
	
	return 0;
}
