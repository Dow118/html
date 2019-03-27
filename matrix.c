#include <stdio.h>
#include <time.h>

#define SIZE 1000
static int matrix_row[SIZE][SIZE], matrix_col[SIZE][SIZE], result[SIZE][SIZE] = {0};

void matMul() {
    // int tmp[SIZE];
    int i,j,k;

    for (i = 0; i < SIZE; i++) {
        for (j = 0; j < SIZE; j++) {
            for (k = 0; k < SIZE; k++) {
                result[i][j] += matrix_row[i][k] * matrix_col[k][j];
            }
        }
    }
}


int main() {

    int i,j;
    double pst;
    clock_t start, end;

    for (i = 0; i < SIZE; i++) {
        for (j = 0; j < SIZE; j++) {
            matrix_row[i][j] = j % 10 + 1;
            matrix_col[i][j] = i % 10 + 1;
        }
    }

    start = clock();
    matMul();
    end = clock();

    pst = (double)(end-start)/CLOCKS_PER_SEC;

    printf("time: %f\n", pst);
}
