#include <stdio.h>
int main(){
	
	int n;
	int vpar[10],vimpar[10];
	int i, ipar, iimpar;
	
	ipar=0;
	iimpar=0;
	
	for(i = 0; i < 10; i++){
		scanf("%d", &n);
		
		if((n%2)==0){
			vpar[ipar]=n;
			ipar++;
		}else{
			vimpar[iimpar]=n;
			iimpar++;
		}
	}
		
		for(i=0; i<ipar;i++){
			printf("%d ", vpar[i]);
		}
		for(i=0; i<iimpar; i++){
			printf("%d ", vimpar[i]);
	}
		
	return 0;
}
