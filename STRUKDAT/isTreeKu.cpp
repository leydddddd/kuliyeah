#include <iostream>
using namespace std;

// Struktur Node untuk merepresentasikan elemen dalam tree
struct TreeNode {
    int value;                     // Nilai dari node
    TreeNode* firstChild;          // Pointer ke anak pertama
    TreeNode* nextSibling;         // Pointer ke saudara berikutnya

    TreeNode(int val) : value(val), firstChild(nullptr), nextSibling(nullptr) {}
};

// Fungsi untuk menambahkan child ke node tertentu
void addChild(TreeNode* parent, int childValue)
{
    TreeNode* child = new TreeNode(childValue); // Membuat node baru
    if (parent->firstChild == nullptr) {
        // Jika belum ada anak, jadikan child sebagai anak pertama
        parent->firstChild = child;
    } else {
        // Jika sudah ada anak, tambahkan sebagai saudara (sibling)
        TreeNode* sibling = parent->firstChild;
        while (sibling->nextSibling != nullptr) {
            sibling = sibling->nextSibling;
        }
        sibling->nextSibling = child;
    }
}

// Fungsi rekursif untuk mencetak tree (Preorder Traversal)
void printTree(TreeNode* root, int depth = 0) {
    if (root == nullptr) return;

    // Cetak nilai node dengan indentation sesuai depth
    for (int i = 0; i < depth; ++i) cout << "--";
    cout << root->value << endl;

    // Cetak subtree dari anak pertama
    printTree(root->firstChild, depth + 1);

    // Cetak subtree dari saudara berikutnya
    printTree(root->nextSibling, depth);
}

int main() {
    // Membuat root dari tree
    TreeNode* root = new TreeNode(1);

    // Menambahkan anak ke root
    addChild(root, 2);
    addChild(root, 3);
    addChild(root, 4);

    // Menambahkan anak ke node dengan nilai 2
    addChild(root->firstChild, 5);
    addChild(root->firstChild, 6);

    // Menambahkan anak ke node dengan nilai 3
    addChild(root->firstChild->nextSibling, 7);

    // Mencetak tree
    cout << "Tree structure:" << endl;
    printTree(root);

    return 0;
}
