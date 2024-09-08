#include <stdio.h>
int main ()
{
	float n1, n2, n3, m;
	printf ("Digite a primeira nota\n");
	scanf ("%f", &n1);
	printf ("Digite a segunda nota\n");
	scanf ("%f", &n2);
	printf ("Digite a terceira nota\n");
	scanf ("%f", &n3);
	m=(n1+n2+n3)/3;
	printf ("A media aritmetica e=%f\n", m);
	system ("PAUSE");
	return 0;
}
