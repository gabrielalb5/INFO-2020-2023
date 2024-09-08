#include <stdio.h>
int main() 
{
	int N, P, i;
	float U;
	
	scanf("%d %d", &N, &P);
	
	for (i=1; i<=N; i++){
	    if (2<=N && N<=10000){
		scanf("%f", &U);
		U = U*100;
		U = U-100;
	    }
	}
 	 
 	 printf("%.2f", U);
	return 0;
}
