#include <iostream>
using namespace std;

int main() {
    int V;
    cout << "Masukkan jumlah simpul: ";
    cin >> V;

    int matrixes[V][V];

    for(int o = 0; o < V; o++)
    {
        for(int e = 0; e < V; e++)
        {
            matrixes[o][e] = 0;
        }
    }

    // Menampilkan matriks kosong
    cout << "\nAdjacency Matrix Awal:\n";
    for (int i = 0; i < V; i++) {
        for (int j = 0; j < V; j++) {
            cout << matrixes[i][j] << " ";
        }
        cout << endl;
    }

    // Input jumlah edges
    int E;
    cout << "\nMasukkan jumlah edges: ";
    cin >> E;

    // Input edges dan memperbarui adjacency matrix
    cout << "\nMasukkan pasangan simpul yang terhubung (contoh: 0 1 untuk edge dari simpul 0 ke 1):\n";
    for (int i = 0; i < E; i++) {
        int u, v;
        cin >> u >> v;

        // Menambahkan edge ke adjacency matrix
        matrixes[u][v] = 1; // Untuk graf berarah
        matrixes[v][u] = 1; // Tambahkan ini jika graf tidak berarah
    }

    // Menampilkan adjacency matrix setelah input edges
    cout << "\nAdjacency Matrix Setelah Menambahkan Edges:\n";
    for (int i = 0; i < V; i++) {
        for (int j = 0; j < V; j++) {
            cout << matrixes[i][j] << " ";
        }
        cout << endl;
    }

    return 0;
}
