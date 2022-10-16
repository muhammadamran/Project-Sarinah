
<!-- <?php
                                                // BarangTarif
                                                $contentBarangTarif = get_content($resultAPI['url_api'] . 'reportCK5SarinahPackingList.php?function=get_BarangTarif&ID_BARANG=' . $ID_HDR);
                                                $dataBarangTarif = json_decode($contentBarangTarif, true);
                                                foreach ($dataBarangTarif['result'] as $row) {
                                                ?>
                                <td><?= $row['JUMLAH_SATUAN']; ?></td>
                                <?php } ?>
                            </tr>
                            <?php } ?>
                            /* calculate total QTY */
                            $result2 = mysqli_query($dbcon, "SELECT sum(JUMLAH_SATUAN) as TotalQty FROM tpb_barang WHERE
                            ID_HEADER = '$ID_HDR' ORDER BY ID ASC");
                            $rowx = mysqli_fetch_array($result2);

                            /* calculate total BOTTLE */
                            $result3 = mysqli_query($dbcon, "SELECT sum(UKURAN*JUMLAH_SATUAN) as TotalBottle FROM
                            tpb_barang WHERE ID_HEADER = '$ID_HDR' ORDER BY ID ASC");
                            $row3 = mysqli_fetch_array($result3);

                            /* calculate total PRICE */
                            $result5 = mysqli_query($dbcon, "SELECT sum(JUMLAH_SATUAN) as TotalLitre FROM
                            tpb_barang_tarif WHERE ID_HEADER = '$ID_HDR' AND JENIS_TARIF = 'CUKAI'");
                            $row5 = mysqli_fetch_array($result5); -->