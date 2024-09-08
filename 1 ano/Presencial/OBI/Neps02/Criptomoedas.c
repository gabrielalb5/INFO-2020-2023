#include <stdio.h>
int main(){
	
	int n;
	int i;
	float compra, venda, cotacao, diff;
	
	scanf("%d", &n);
	
	for(i=0; i<n; i++){
		scanf("%f", &cotacao);
		
		if(i==0){
			compra = cotacao*100;
		}
		
		if(i==(n-1)){
			venda=cotacao*100;
		}
	}
	diff = venda-compra;
	
	printf("%.2f", diff);
	
	return 0;
}
