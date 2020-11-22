<div id="page-wrapper">
	<?php
	require_once "interface/AntarMuka.php";

	/**
	 * 
	 */
	class Main
	{
		public $main;
		public static $grafik = [];

		public function __construct()
		{
			$this->main = new AntarMuka();
		}

		public function main()
		{
			$parameter = $_GET['parameter'];

			if ($_GET['rik'] == "data-mahasiswa") {
				$this->main->tampilMahasiswa();
			} elseif ($_GET['rik'] == "tambah-mahasiswa") {
				$this->main->formMahasiswa();
			} elseif ($_GET['rik'] == "detail-mahasiswa") {
				$this->main->formPencarianMahasiswa(1);
			} elseif ($_GET['rik'] == "ubah-mahasiswa") {
				$this->main->formPencarianMahasiswa();
			} elseif ($_GET['rik'] == "hapus-mahasiswa") {
				$id_mahasiswa = $_GET['id_mahasiswa'];
				$data = new MengelolaMahasiswa($id_mahasiswa);
				$data->MenghapusMahasiswa();
				$this->main->tampilMahasiswa();
			} else
				/**
				 * 
				 */
				if ($_GET['rik'] == "data-dosen") {
					$this->main->tampilDosen();
				} elseif ($_GET['rik'] == "tambah-dosen") {
					$this->main->formDosen();
				} elseif ($_GET['rik'] == "detail-dosen") {
					$this->main->formPencarianDosen(1);
				} elseif ($_GET['rik'] == "ubah-dosen") {
					$this->main->formPencarianDosen();
				} elseif ($_GET['rik'] == "hapus-dosen") {
					$id_dosen = $_GET['id_dosen'];
					$data = new MengelolaDosen($id_dosen);
					$data->MenghapusDosen();
					$this->main->tampilDosen();
				} else
					/**
					 * 
					 */
					if ($_GET['rik'] == "data-Kelompok") {
						$this->main->tampilKelompok();
					} elseif ($_GET['rik'] == "data-anggota") {
						$this->main->tampilAnggotaKelompok();
					} elseif ($_GET['rik'] == "tambah-anggota") {
						$this->main->tambahAnggotaKelompok();
					} elseif ($_GET['rik'] == "tambah-Kelompok") {
						$this->main->formKelompok();
					} elseif ($_GET['rik'] == "detail-Kelompok") {
						$this->main->formPencarianKelompok(1);
					} elseif ($_GET['rik'] == "ubah-Kelompok") {
						$this->main->formPencarianKelompok();
					} elseif ($_GET['rik'] == "hapus-Kelompok") {
						$id_kelompok = $_GET['id_kelompok'];
						$data = new MengelolaKelompok($id_kelompok);
						$data->MenghapusKelompok();
						$this->main->tampilKelompok();
					} elseif ($_GET['rik'] == "hapus-anggota") {
						$id_mahasiswa = $_GET['id_mahasiswa'];
						$data = new MengelolaMahasiswa($id_mahasiswa);
						$data->MenghapusAnggotaMahasiswa();
						$this->main->tampilAnggotaKelompok();
					} else
						/**
					 * 
					 */
						if ($_GET['rik'] == "data-status-kelompok") {
							$this->main->tampilStatusKelompok();
						} elseif ($_GET['rik'] == "tambah-status-kelompok") {
							$this->main->formStatusKelompok();
						} elseif ($_GET['rik'] == "detail-status-kelompok") {
							$this->main->formPencarianStatusKelompok(1);
						} elseif ($_GET['rik'] == "ubah-status-kelompok") {
							$this->main->formPencarianStatusKelompok();
						} elseif ($_GET['rik'] == "hapus-status-kelompok") {
							$id_kelompok = $_GET['id_status_kelompok'];
							$data = new MengelolaStatusKelompok($id_status_kelompok);
							$data->MenghapusStatusKelompok();
							$this->main->tampilStatusKelompok();
						} else
							/**
				 * 
				 */
							// if ($_GET['rik'] == "data-Bimbingan") {
							// 	$this->main->tampilBimbingan();
							// } elseif ($_GET['rik'] == "tambah-Bimbingan") {
							// 	$this->main->formBimbingan();
							// } elseif ($_GET['rik'] == "detail-Bimbingan") {
							// 	$this->main->formPencarianBimbingan(1);
							// } elseif ($_GET['rik'] == "ubah-Bimbingan") {
							// 	$this->main->formPencarianBimbingan();
							// } elseif ($_GET['rik'] == "hapus-Bimbingan") {
							// 	$id_upload = $_GET['id_upload'];
							// 	$data = new MengelolaBimbingan($id_bimbingan);
							// 	$data->MenghapusBimbingan();
							// 	$this->main->tampilBimbingan();
							// } else


							if ($_GET['rik'] == "data-UploadSkripsi") {
								$this->main->tampilBimbingan();
							} elseif ($_GET['rik'] == "tambah-UploadSkripsi") {
								$this->main->formBimbingan();
							} elseif ($_GET['rik'] == "detail-UploadSkripsi") {
								$this->main->formPencarianBimbingan(1);
							} elseif ($_GET['rik'] == "ubah-UploadSkripsi") {
								$this->main->formPencarianBimbingan();
							} elseif ($_GET['rik'] == "hapus-UploadSkripsi") {
								$id_upload = $_GET['id_upload'];
								$data = new MengelolaBimbingan($id_upload);
								$data->MenghapusBimbingan();
								$this->main->tampilBimbingan();
							} else
			
			
								if ($_GET['rik'] == "data-Dokumenskripsi") {
								$this->main->tampilDokumenSkripsi();
							} elseif ($_GET['rik'] == "tambah-DokumenSkripsi") {
								$this->main->formDokumenSkripsi();
							} elseif ($_GET['rik'] == "detail-DokumenSkripsi") {
								$this->main->formPencarianDokumenSkripsi(1);
							} elseif ($_GET['rik'] == "ubah-Dokumenkripsi") {
								$this->main->formPencarianDokumenSkripsi();
							} elseif ($_GET['rik'] == "hapus-DokumenSkripsi") {
								$id_dokumen_skripsi = $_GET['id_dokumen_skripsi'];
								$data = new MengelolaDokumenskripsi($id_dokumen_skripsi);
								$data->MenghapusDokumen();
								$this->main->tampilDokumenSkripsi();
							} else
								/**
				 * 
				 */
								if ($_GET['rik'] == "data-DokumenKkp") {
									$this->main->tampilDokumenKkp();
								} elseif ($_GET['rik'] == "tambah-DokumenKkp") {
									$this->main->formDokumenKkp();
								} elseif ($_GET['rik'] == "detail-DokumenKkp") {
									$this->main->formPencarianDokumenKkp(1);
								} elseif ($_GET['rik'] == "ubah-DokumenKkp") {
									$this->main->formPencarianDokumenKkp();
								} elseif ($_GET['rik'] == "hapus-DokumenKkp") {
									$id_dokumen_kkp = $_GET['id_dokumen_kkp'];
									$data = new MengelolaDokumenKkp($id_dokumen_kkp);
									$data->MenghapusDokumen();
									$this->main->tampilDokumenKkp();
								} else
									/**
				 * 
				 */
									if ($_GET['rik'] == "data-Instansi") {
										$this->main->tampilInstansi();
									} elseif ($_GET['rik'] == "tambah-Instansi") {
										$this->main->formInstansi();
									} elseif ($_GET['rik'] == "detail-Instansi") {
										$this->main->formPencarianInstansi(1);
									} elseif ($_GET['rik'] == "ubah-Instansi") {
										$this->main->formPencarianInstansi();
									} elseif ($_GET['rik'] == "hapus-Instansi") {
										$id_instansi = $_GET['id_instansi'];
										$data = new MengelolaInstansi($id_instansi);
										$data->MenghapusInstansi();
										$this->main->tampilInstansi();
									} else
										/**
				 * 
				 */
										if ($_GET['rik'] == "data-ValidasiDokumenSkripsi") {
											$this->main->tampilValidasiDokumenSkripsi();
										} elseif ($_GET['rik'] == "tambah-ValidasiDokumenSkripsi") {
											$this->main->formInstansi();
										} elseif ($_GET['rik'] == "detail-ValidasiDokumenSkripsi") {
											$this->main->formPencarianIstansi(1);
										} elseif ($_GET['rik'] == "ubah-ValidasiDokumenSkripsi") {
											$this->main->formPencarianIstansi();
										} elseif ($_GET['rik'] == "hapus-ValidasiDokumenSkripsi") {
											$id_val_skripsi = $_GET['id_val_skripsi'];
											$data = new MengelolaValidasiDokumenSkripsi($id_val_skripsi);
											$data->MenghapusValidasiDokumenSkripsi();
											$this->main->tampilValidasiDokumenSkripsi();
										} else
											/**
				 * 
				 */
											if ($_GET['rik'] == "data-admin") {
												$this->main->tampilAdmin();
											} elseif ($_GET['rik'] == "tambah-Admin") {
												$this->main->formAdmin();
											} elseif ($_GET['rik'] == "detail-Admin") {
												$this->main->formPencarianAdmin(1);
											} elseif ($_GET['rik'] == "ubah-Admin") {
												$this->main->formPencarianAdmin();
											} elseif ($_GET['rik'] == "hapus-Admin") {
												$id_admin = $_GET['id_admin'];
												$data = new MengelolaAdmin($id_admin);
												$data->MenghapusAdmin();
												$this->main->tampilAdmin();
											} else
												/**
				 * 
				 */
												if ($_GET['rik'] == "data-ValidasiDokumenKKP") {
													$this->main->tampilValidasiDokumenKKP();
												} elseif ($_GET['rik'] == "tambah-ValidasiDokumenKKP") {
													$this->main->formValidasiDokumenKkp();
												} elseif ($_GET['rik'] == "detail-ValidasiDokumenKKP") {
													$this->main->formPencarianDokumenKkp(1);
												} elseif ($_GET['rik'] == "ubah-ValidasiDokumenKKP") {
													$this->main->formPencarianDokumenKkp();
												} elseif ($_GET['rik'] == "hapus-ValidasiDokumenKKP") {
													$id_val_kkp = $_GET['id_val_kkp'];
													$data = new MengelolaValidasiDokumenKKP($id_val_kkp);
													$data->MenghapusValidasiDokumenKkp();
													$this->main->tampilValidasiDokumenKKP();
												} else
													/**
				 * 
				 */
													if ($_GET['rik'] == "data-DownloadDokumenKKP") {
														$this->main->tampilDownloadDokumenKKP();
													} elseif ($_GET['rik'] == "tambah-DownloadDokumenKKP") {
														$this->main->formDownloadDokumenKKP();
													} elseif ($_GET['rik'] == "detail-DownloadDokumenKKP") {
														$this->main->formPencarianDownloadDokumenKKP(1);
													} elseif ($_GET['rik'] == "ubah-DownloadDokumenKKP") {
														$this->main->formPencarianDownloadDokumenKKP();
													} elseif ($_GET['rik'] == "hapus-DownloadDokumenKKP") {
														$id_download_kkp = $_GET['id_download_kkp'];
														$data = new MengelolaDownloadDokumenKKP($id_download_kkp);
														$data->MenghapusDownloadDokumenKKP();
														$this->main->tampilDownloadDokumenKKP();
													} else
														/**
			 * 
			 */
														if ($_GET['rik'] == "data-DownloadDokumenSkripsi") {
															$this->main->tampilDosenDownloadDokumenSkripsi();
														} elseif ($_GET['rik'] == "tambah-DownloadDokumenSkripsi") {
															$this->main->formDosen();
														} elseif ($_GET['rik'] == "detail-DownloadDokumenSkripsi") {
															$this->main->formPencarianDownloadDokumenSkripsi(1);
														} elseif ($_GET['rik'] == "ubah-DownloadDokumenSkripsi") {
															$this->main->formPencarianDownloadDokumenSkripsi();
														} elseif ($_GET['rik'] == "hapus-DownloadDokumenSkripsi") {
															$id_download = $_GET['id_download'];
															$data = new MengelolaDownloadDokumenSkripsi($id_download);
															$data->MenghapusDownloadDokumenSkripsi();
															$this->main->tampilDownloadDokumenSkripsi();
														} else
															/**
			 * 
			 */
															if ($_GET['rik'] == "data-pembimbing-lapangan") {
																$this->main->tampilPembimbingLapangan();
															} elseif ($_GET['rik'] == "tambah-pembimbing-lapangan") {
																$this->main->formPembimbingLapangan();
															} elseif ($_GET['rik'] == "detail-pembimbing-lapangan") {
																$this->main->formPencarianPembimbingLapangan(1);
															} elseif ($_GET['rik'] == "ubah-pembimbing-lapangan") {
																$this->main->formPencarianPembimbingLapangan();
															} elseif ($_GET['rik'] == "hapus-pembimbing-lapangan") {
																$id_pembimbing_lapangan = $_GET['id_pembimbing_lapangan'];
																$data = new MengelolaPembimbingLapangan($id_pembimbing_lapangan);
																$data->MenghapusPembimbingLapangan();
																$this->main->tampilPembimbingLapangan();
															} else
																
																if ($_GET['rik'] == "data-dosen-pembimbing") {
																$this->main->tampilMembimbing();
															} elseif ($_GET['rik'] == "tambah-dosen-pembimbing") {
																$this->main->formMembimbing();
															} elseif ($_GET['rik'] == "detail-dosen-pembimbing") {
																$this->main->formPencarianMembimbing(1);
															} elseif ($_GET['rik'] == "ubah-dosen-pembimbing") {
																$this->main->formPencarianMembimbing();
															} elseif ($_GET['rik'] == "hapus-dosen-pembimbing") {
																$id_bimbingan = $_GET['id_bimbingan'];
																$id_status = $_GET['id_status'];
																$data = new MengelolaMembimbing('', '', $id_status);
																$data->MenghapusMembimbing($id_bimbingan);
																$this->main->tampilMembimbing();
																header("Location:index.php?rik=data-dosen-pembimbing");
															} else
																/**
			 * 
			 */
																if ($_GET['rik'] == "data-StatusMembimbing") {
																	$this->main->tampilStatusMembimbing();
																} elseif ($_GET['rik'] == "tambah-StatusMembimbing") {
																	$this->main->formStatusMembimbing();
																} elseif ($_GET['rik'] == "detail-StatusMembimbing") {
																	$this->main->formPencarianStatusMembimbing(1);
																} elseif ($_GET['rik'] == "ubah-StatusMembimbing") {
																	$this->main->formPencarianStatusMembimbing();
																} elseif ($_GET['rik'] == "hapus-StatusMembimbing") {
																	$id_dosen_pembimbing = $_GET['id_status_dosen_pembimbing'];
																	$data = new MengelolaStatusMembimbing($id_status_dosen_pembimbing);
																	$data->MenghapusStatusMembimbing();
																	$this->main->tampilStatusMembimbing();
																} else
																	/**
			 * 
			 */
																	if ($_GET['rik'] == "ubah-pengaturan") {
																		$this->main->UbahPengaturan();
																	} else {
																		$kkp = new MengelolaDokumenKkp();
																		$data_kkp = $kkp->queryCountByTahun();
																		self::$grafik['kkp'] = $data_kkp;
																		$skripsi = new MengelolaDokumenSkripsi();
																		$data_skripsi = $skripsi->queryCountByTahun();
																		self::$grafik['skripsi'] = $data_skripsi;
																		// echo "cek";
																		// print_r($data_skripsi);
																		// echo "cek";
																		// die;
																		require "template/content.php";
																	}
		}
	}

	/**
	 * Displays homepage.
	 *
	 * @return Running Application
	 */
	$run = new Main();
	echo $run->main();


	?>
</div>