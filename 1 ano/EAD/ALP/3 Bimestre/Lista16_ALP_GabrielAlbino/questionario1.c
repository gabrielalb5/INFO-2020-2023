#include<stdio.h>
int main(){
    int n,s=0;
    
    scanf("%d",&n);
    while(n<=100);
    {
        s=s+n;
        n=n+2;
    }
    printf("Soma: %d",s);
    
    getch();
    return 0;
}
