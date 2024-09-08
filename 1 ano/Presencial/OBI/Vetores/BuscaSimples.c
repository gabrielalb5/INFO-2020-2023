#include <stdio.h>
int main(){
	
	int v[10];//vetor
	int nbusca;
	int i;
	int achou=0;
	
	//preenchimento do vetor
	for(i=0;1<10;i++){
		scanf("%d", &v[i]);
	}
	//leitura do numero a ser buscado
	scanf("%d", &nbusca);
	
	for(i=0;i<10;i++){
		if(nbusca==v[i]){
			achou=1;
		}
	}
	
	if (achou==1){
		printf("SIM");
	}else{
		printf("NAO");
	}
	
	return 0;
}
