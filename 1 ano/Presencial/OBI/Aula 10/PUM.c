#include <stdio.h>
int main(){
	
	int n, i;
	int valor = 0;
	
	scanf("%d", &n);
	
	for(i=1; i<=n; i++){
		printf("%d %d %d PUM!\n", valor+1, valor+2, valor+3);
		valor = valor+4;
	}
	
	return 0;
}
