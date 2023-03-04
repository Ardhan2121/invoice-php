<?php
session_start();

if (isset($_POST['produk'])) {
    $produk = $_POST['produk'];

    // Check if the product already exists in the session cart
    $produkIndex = -1;
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $index => $item) {
            if ($item['id'] == $produk['id']) {
                $produkIndex = $index;
                break;
            }
        }
    }

    // Add the product to the session cart or update its qty and total
    if ($produkIndex == -1) {
        $_SESSION['cart'][] = $produk;
    } else {
        $_SESSION['cart'][$produkIndex]['qty'] += $produk['qty'];
        $_SESSION['cart'][$produkIndex]['total'] += $produk['total'];
    }

    // Calculate subtotal of the session cart
    $subtotal = 0;
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $subtotal += $item['total'];
        }
    }
    $_SESSION['subtotal'] = $subtotal;
}

if (isset($_POST['hapus_produk'])) {
    $hapusId = $_POST['hapus_produk'];
    // Remove the product from the session cart
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $index => $item) {
            if ($item['id'] == $hapusId) {
                unset($_SESSION['cart'][$index]);
                break;
            }
        }
        // Recalculate subtotal of the session cart
        $subtotal = 0;
        foreach ($_SESSION['cart'] as $item) {
            $subtotal += $item['total'];
        }
        $_SESSION['subtotal'] = $subtotal;
    }
    exit();
}

if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
    $data = array();

    foreach ($cart as $item) {
        $data[] = array(
            'id' => $item['id'],
            'nama' => $item['nama'],
            'harga' => $item['harga'],
            'qty' => $item['qty'],
            'total' => $item['total']
        );
    }
} else {
    $data = array();
}

echo json_encode($data);
?>