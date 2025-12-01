#include <stdio.h>
int main() {
    int i, q, block;
    for (block = 0; block < 3; block++) {             // 3 blocks of 4 tables
        for (i = 1; i <= 12; i++) {                   // rows
            for (q = 1 + block * 4; q <= 4 + block * 4; q++) { // columns in block
                printf("%2d x %2d = %-3d   ", q, i, q * i);
            }
            printf("\n");
        }
        printf("\n"); // blank line between blocks
    }
    return 0;
}
