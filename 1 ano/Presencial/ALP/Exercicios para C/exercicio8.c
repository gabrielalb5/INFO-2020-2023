#include <stdio.h>
int main ()
{
	float pt, pp,r;
	printf ("Digite a nota da prova tecnica\n");
	scanf ("%f", &pt);
	printf ("Digite a nota da prova pratica\n");
	scanf ("%f", &pp);
	r= ((pt*2)+(pp*1))/3;
	printf ("A media e= %f\n", r);
	system ("PAUSE");
	return 0;
}
