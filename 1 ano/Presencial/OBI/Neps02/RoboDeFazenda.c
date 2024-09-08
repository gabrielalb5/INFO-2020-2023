#include <stdio.h>
int main(){
	
	int n, c, s;
	int eatual, i, cmd, eprob;
	
	eatual = 1;
	eprob = 0;
	
	scanf("%d %d %d", &n, &c, &s);
	
	if(s == 1){
		eprob = eprob + 1;
	}
	
	for(i=0; i<c; i++){
		scanf("%d", &cmd);//1 ou -1
		eatual = eatual+cmd;
		
		if(eatual == 0){
			eatual = n;
		}else if(eatual == (n+1)){
			eatual = 1;
		}
		
		if(eatual == s){
			eprob = eprob +1;
		}
	}	
	
	printf("%d", eprob);
	return 0;
}
