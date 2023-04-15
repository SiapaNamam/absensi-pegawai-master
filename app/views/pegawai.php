<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pegawai</title>
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/style.css" />
  </head>

  <body class="bg-blue-100">
    <!-- Header Start -->
    <div class="top-0 left-0 z-10 h-fit w-full bg-blue-100 py-2">
      <h1 class="my-3 mb-2 text-center text-2xl font-bold text-secondary">
        Daftar Pegawai
      </h1>
      <form
        action="<?=BASE_URL?>/Pegawai/cari"
        method="post"
        class="container mb-3 flex items-center justify-center md:justify-end"
      >
        <input
          type="text"
          name="search"
          id="search"
          class="w-64 rounded-md border-2 border-slate-400 px-5 py-1.5 text-left text-xs text-secondary shadow-sm focus:outline-primary"
        />
        <button
          type="submit"
          name="submit"
          id="submit"
          class="ml-2 rounded-lg bg-primary p-1.5 text-white hover:opacity-80"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-[20px] w-full"
          >
            <path
              fill-rule="evenodd"
              d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
              clip-rule="evenodd"
            />
          </svg>
        </button>
      </form>
    </div>
    <!-- Header Start -->
    <!-- Content Start -->
    <div class="container">
      <table
        class="mt-12 table w-full table-auto border-collapse border text-xs md:text-base"
      >
        <tr>
          <th
            class="border-collapse border border-slate-400 px-1.5 py-1.5 text-secondary"
          >
            No
          </th>
          <th
            class="border-collapse border border-slate-400 px-1.5 py-1.5 text-secondary"
          >
            ID
          </th>
          <th
            class="border-collapse border border-slate-400 px-1.5 py-1.5 text-secondary"
          >
            Nama
          </th>
          <th
            class="border-collapse border border-slate-400 px-1.5 py-1.5 text-secondary"
          >
            Email
          </th>
          <th
            class="border-collapse border border-slate-400 px-1.5 py-1.5 text-secondary"
          >
            Nomor Telepon
          </th>
          <th
            class="border-collapse border border-slate-400 px-1.5 py-1.5 text-secondary"
          >
            Department
          </th>
          <th
            class="border-collapse border border-slate-400 px-1.5 py-1.5 text-secondary"
          >
            Kode Akses
          </th>
          <th
            class="border-collapse border border-slate-400 px-1.5 py-1.5 text-secondary"
          >
            Aksi
          </th>
        </tr>
        <?php $no=1;?>
        <?php foreach ($data['pegawai'] as $row):?>
        <tr>
          <td
            class="border-collapse border border-slate-400 px-1.5 py-1.5 text-secondary"
          > <?=$no?> </td>
          <td
            class="border-collapse border border-slate-400 px-1.5 py-1.5 text-secondary"
          > <?=$row['id_pegawai']?> </td>
          <td
            class="border-collapse border border-slate-400 px-1.5 py-1.5 text-secondary"
          > <?=$row['nama_pegawai']?> </td>
          <td
            class="border-collapse border border-slate-400 px-1.5 py-1.5 text-secondary"
          > <?=$row['email']?> </td>
          <td
            class="border-collapse border border-slate-400 px-1.5 py-1.5 text-secondary"
          ><?=$row['telepon']?></td>
          <td
            class="border-collapse border border-slate-400 px-1.5 py-1.5 text-secondary"
          ><?=$row['department']?></td>
          <td
            class="border-collapse border border-slate-400 px-1.5 py-1.5 text-secondary"
          ><?=$row['kode_akses']?></td>
          <td
            class="w-auto border-collapse border border-slate-400 px-3 py-2 text-center text-secondary md:w-[154px]"
          >
          
          <!--aksi-->
            <div class="flex w-full">
              <div class="w-5/12 md:w-1/2">
                <a href="<?=BASE_URL?>/Pegawai/viewUpdate/<?=$row['id_pegawai']?>">
                  <button
                    type="button"
                    class="w-full rounded-lg bg-primary py-1.5 text-center text-white shadow-sm hover:opacity-80"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      class="h-[20px] w-full"
                    >
                      <path
                        d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z"
                      />
                      <path
                        d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z"
                      />
                    </svg>
                  </button>
                </a>
              </div>
              <div class="ml-2 w-5/12 md:w-1/2">
                <a href="<?=BASE_URL?>/Pegawai/hapus/<?=$row['id_pegawai']?>">
                  <button
                    type="button"
                    class="w-full rounded-lg bg-primary py-1.5 text-center text-white shadow-sm hover:opacity-80"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      class="h-[20px] w-full"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </button>
                </a>
              </div>
            </div>
          </td>
          <?php $no++;
          endforeach;?>
        </tr>
      </table>
      <a href="<?= BASE_URL ?>/Pegawai/viewTambah">
        <button
          type="button"
          name="tambah"
          id="submit"
          class="fixed bottom-16 right-1/2 z-50 w-[50px] translate-x-1/2 rounded-3xl border-2 border-primary bg-white object-center p-1.5 text-primary hover:bg-primary hover:text-white md:bottom-5 md:right-32 md:bg-primary md:text-white"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-full w-full"
          >
            <path
              fill-rule="evenodd"
              d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z"
              clip-rule="evenodd"
            />
          </svg>
        </button>
      </a>
    </div>
    <!-- Content End -->
    <script  src="<?=BASE_URL?>/js/script.js"></script>
  </body>
</html>
