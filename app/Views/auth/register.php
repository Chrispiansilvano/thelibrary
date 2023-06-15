<!DOCTYPE html>
<html>

<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        /* CSS styles */

        body {
            /* font-family: "Roboto", sans-serif; */
            font-family: "Poppins", sans-serif;
            background-color: #f4f4f4;
            /* background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNzY4cHgiIGhlaWdodD0iMTAyNHB4IiB2aWV3Qm94PSIwIDAgNzY4IDEwMjQiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDQzLjIgKDM5MDY5KSAtIGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCAtLT4KICAgIDx0aXRsZT5QYWdlIDE8L3RpdGxlPgogICAgPGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+CiAgICA8ZGVmcz4KICAgICAgICA8cmVjdCBpZD0icGF0aC0xIiB4PSIwIiB5PSIwIiB3aWR0aD0iMTAyNCIgaGVpZ2h0PSI3NjgiPjwvcmVjdD4KICAgICAgICA8cmVjdCBpZD0icGF0aC0zIiB4PSI1NDgiIHk9IjEyOTAiIHdpZHRoPSIxMDI0IiBoZWlnaHQ9Ijc2OCI+PC9yZWN0PgogICAgPC9kZWZzPgogICAgPGcgaWQ9IlRhYmxldCIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgaWQ9IlRfU3RhcnQiPgogICAgICAgICAgICA8ZyBpZD0iUGFnZS0xIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzODQuMDAwMDAwLCA1MTIuMDAwMDAwKSByb3RhdGUoLTI3MC4wMDAwMDApIHRyYW5zbGF0ZSgtMzg0LjAwMDAwMCwgLTUxMi4wMDAwMDApIHRyYW5zbGF0ZSgtMTI4LjAwMDAwMCwgMTI4LjAwMDAwMCkiPgogICAgICAgICAgICAgICAgPG1hc2sgaWQ9Im1hc2stMiIgZmlsbD0id2hpdGUiPgogICAgICAgICAgICAgICAgICAgIDx1c2UgeGxpbms6aHJlZj0iI3BhdGgtMSI+PC91c2U+CiAgICAgICAgICAgICAgICA8L21hc2s+CiAgICAgICAgICAgICAgICA8ZyBpZD0iTWFzayI+PC9nPgogICAgICAgICAgICAgICAgPGcgbWFzaz0idXJsKCNtYXNrLTIpIiBpZD0iR3JvdXAtMTYiPgogICAgICAgICAgICAgICAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDcwMC45ODI0NjgsIDQ4OS4xMzYyMjUpIHJvdGF0ZSgtMjcwLjAwMDAwMCkgdHJhbnNsYXRlKC03MDAuOTgyNDY4LCAtNDg5LjEzNjIyNSkgdHJhbnNsYXRlKC00NjQuNTE3NTMyLCAtOTk1Ljg2Mzc3NSkiPgogICAgICAgICAgICAgICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMC4wMDAwMDAsIDAuMTQ2ODE2KSI+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bWFzayBpZD0ibWFzay00IiBmaWxsPSJ3aGl0ZSI+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHVzZSB4bGluazpocmVmPSIjcGF0aC0zIj48L3VzZT4KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvbWFzaz4KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx1c2UgaWQ9Ik1hc2siIGZpbGw9IiMxRDE4NDIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEwNjAuMDAwMDAwLCAxNjc0LjAwMDAwMCkgcm90YXRlKC05MC4wMDAwMDApIHRyYW5zbGF0ZSgtMTA2MC4wMDAwMDAsIC0xNjc0LjAwMDAwMCkgIiB4bGluazpocmVmPSIjcGF0aC0zIj48L3VzZT4KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwb2x5Z29uIGlkPSJGaWxsLTkiIGZpbGw9IiNGREExQTIiIHBvaW50cz0iMzU0Ljk4OTMxOCAxNTU0LjQxOTQgMTAzNi4zMzg4IDE1NTQuNDE5NCAxMDM2LjMzODggNzIzLjExNTAwNSAzNTQuOTg5MzE4IDcyMy4xMTUwMDUiPjwvcG9seWdvbj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0yMy4xMTQ1MjA4LDI5MTAuNzgyNDQgQzIzLjMwOTE0NDgsMjkxMC43Mzg0IDI1LjczNjQzNzUsMjkxMC4xNTg0NyAyOS44OTY5ODU5LDI5MDguOTQ3MjQgQzI0LjUwOTkzODYsMjkwNS42MDM1MSAyMC4xMjUzODg5LDI5MDAuNTU2NzIgMTcuNzY3ODY3MSwyODk0LjEzMzUyIEMxMi4yMDA4ODQzLDI4NzguOTc0NzkgMjAuMDA3ODgsMjg2Mi4xMzg2OCAzNS4xNDA4MTkzLDI4NTYuNDgyNiBDMzguMjkxNTI2LDI4NTUuMzA4MDcgOTUuNzcxNzI0OSwyODMyLjkyOTY2IDEzOS44MDA4MywyNzYxLjM0OTU5IEMxNTYuNzAzNzQ3LDI3MjguMzQxNzIgMTY1Ljc2Mjk0NiwyNjgxLjg4OTE4IDEzNS4yMjUzMjgsMjYyNy40MzE1MSBDNzIuNzk4NzQwNSwyNTE2LjA5MzcxIDM5Ljc0OTM3MDQsMjQ5Ny43NDE3MyAxOS41NTI1MzMxLDI0NjIuODcyOTYgQzYuMDA1OTYzNTEsMjQzOS40ODUyIC02LjE1MjUzMjU0LDIzNjAuMTAxODcgNDIuMTk1MDIzOCwyMjkyLjE5OTUzIEM0Mi4xOTUwMjM4LDIyOTIuMTk5NTMgNTYwLjQwNTQ3NSwxNTEzLjEzNTg5IDY5Ny4wNjQ2MiwxMzM5LjczMTY4IEM4NTQuODM0OTY5LDExMzkuNTMzNTggMTA5Ni40NzcyNyw4MDYuOTM2OTQ4IDExMzUuNjQ4MTIsNzQ0LjU0MDIxIEMxMTM1LjY0ODEyLDc0NC41NDAyMSAxMjUxLjMyMDkyLDU4MS4yMDc1NzMgMTE3OS43MTM5NSwzNzUuNjY1Mzc3IEwxMzUxLjA4MjI4LDAuNjc1NjY0MDc1IEMxMzUxLjA4MjI4LDAuNjc1NjY0MDc1IDE4MjMuNTYzNDIsMzk3LjA3ODQ2OSAxNDk2Ljc0MTg3LDk5Ny43OTc1NTggQzEyMTAuMjg4MjksMTUyNC4zMjMyNSA0MDguMTg3NDIxLDIyMDAuNDM5NjIgNDA4LjE4NzQyMSwyMjAwLjQzOTYyIEM0MDguMTg3NDIxLDIyMDAuNDM5NjIgMjIzLjM1Njk4MiwyMzc5LjY3OTc2IDI2NS41ODY3MzMsMjQ3My44ODQxNSBDMzIxLjA5MTMxNCwyNTk3LjcxMjMxIDMyNy40MDAwNzEsMjcwMi42NzQ2NCAyNjMuNzUwNjU3LDI4MDQuMjE5ODIgQzI1MC45NjQyMjMsMjgyNC42MTYyMiAyMzQuNDA2NDg4LDI4NDMuNjQzNTUgMjE3LjQxMTc2OCwyODYwLjM2MjIxIEMxNDMuMzE4NzUyLDI5NDIuNTI3NyA0Mi4xMjUyNTI5LDI5NjYuNjgyNTggMzYuMTkxMDU0OSwyOTY4LjA0MDYyIEMzMy45ODc3NjM1LDI5NjguNTM5OCAzMS43ODgxNDQzLDI5NjguNzgyMDQgMjkuNjI1MjQ2NywyOTY4Ljc4MjA0IEMxNi4yMjU1NjMyLDI5NjguNzgyMDQgNC4xMTg0NzcyNiwyOTU5LjU1NDY3IDEuMDA4MTY0MzIsMjk0NS45NDQ4NCBDLTIuNTk3ODg5MTgsMjkzMC4xMzI3NyA3LjI5NDg4ODk0LDI5MTQuMzkwNDQgMjMuMTE0NTIwOCwyOTEwLjc4MjQ0IiBpZD0iRmlsbC0xMyIgZmlsbD0iIzhFMEQzQyI+PC9wYXRoPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTE0NzguODAwMSwyMzAxLjM4NTggQzE0NzQuMTE0NDMsMjMwMy43Mzg1MyAxNDcyLjkyNDY2LDIzMDIuMjc0MDQgMTQ3My4xMzM5NywyMzAwLjY1OTA2IEwxNDI4LjYxNjQ3LDIyOTUuNTM4ODYgQzE0MjguMjkzMzIsMjI5OC4wNzE0MyAxNDI2LjAzODYyLDIyOTkuODk1NjIgMTQyMy40OTM4MSwyMjk5LjY5Mzc1IEMxNDIwLjc3Mjc1LDIyOTkuNDczNTIgMTQxOC43ODYxMiwyMjk3LjAyNTM3IDE0MTkuMTM4NjQsMjI5NC4zMjAyOSBMMTM3NC4yMzU1NiwyMjkyLjE2OTQ0IEMxMzczLjk3ODUxLDIyOTQuMTU4NzkgMTM3Mi4yMDg1NCwyMjk1LjU5NzU5IDEzNzAuMjA3MjEsMjI5NS40Mzk3NiBDMTM2OC4wNjYzNSwyMjk1LjI2NzI1IDEzMjEuNTU0ODcsMjI5MS41NTI4MSAxMzIxLjU1NDg3LDIyOTEuNTUyODEgQzEzMjEuNDQ4MzgsMjI5MS41NDU0NyAxMzA4Ljc0NjQsMjM2OC4zNTk1MiAxMjQwLjExNzU1LDIzOTYuODA1MSBDMTIzMi43OTg5NSwyMzk5LjQ4ODE2IDEyMjQuOTU1MjMsMjQwMS43ODU4MiAxMjE2LjQzNTg0LDI0MDMuOTQwMzUgQzEyMTQuNzg3MDQsMjQwNC4yNjcwMSAxMjEzLjE3MTMsMjQwNC42MjMwNCAxMjExLjQ4MjExLDI0MDQuODg3MzEgQzExNjUuODI5OTEsMjQxNC4xOTU0MyAxMTM0LjU0MzE3LDIzODYuNzExNTEgMTEzNC41NDMxNywyMzg2LjcxMTUxIEMxMDU0Ljk4MjMyLDIzMTMuMzAzNTggMTExOS44NTQ1NiwyMjE2LjY1MTAzIDExMTkuODU0NTYsMjIxNi42NTEwMyBDMTIwNy45ODYyMiwyMDk3Ljk3NjExIDE1NTUuOTIyNjQsMTk3OS4yOTc1MSAxNTU1LjkyMjY0LDE5NzkuMjk3NTEgQzE5NjQuMTQ0NzksMTc5OC41MzA0OSAyMDgxLjA0MDQxLDE3MDUuODUyOTggMjA4MS4wNDA0MSwxNzA1Ljg1Mjk4IEMyMjQxLjUxMzQ2LDE1OTYuODg5OTMgMjMxMy4wMzU5NywxNDY0LjQxNDMxIDIzMjcuNjg3ODYsMTM0OC4yOTc2NSBDMjM0Mi44NDI4MywxMjI4LjE4NzYgMjI5Mi4yMzMyMywxMTAwLjIwMDg4IDIyMTYuNTI0NDcsMTAwNS43MTAyIEMxOTU2LjgzNzIxLDY4MS41OTk1MTkgMTUzOC4xNzUxMyw0NDUuNjg0Nzk0IDE1MzguMTc1MTMsNDQ1LjY4NDc5NCBDMTE5Ni4xNjU1NiwyMTQuMDY4MTAzIDEwMDAuODk1MTksMTI2LjE2MjExMSA5MDAuNDQzNDY3LDkyLjgzMTI0MTUgTDkwMC40NDM0NjcsOTE0LjY2OTY4NyBDMTQ5MC41OTg3MiwxMTk2LjY1MTU2IDE5NDcuMDA2ODUsMTI5MS4wOTgyIDE5NDcuMDA2ODUsMTI5MS4wOTgyIEMxNzM1Ljg1ODEsMTM4NC42OTMzIDEyNjUuODIyNjEsMTc2OC4yNDk3MiAxMjY1LjgyMjYxLDE3NjguMjQ5NzIgQzEyNjUuODIyNjEsMTc2OC4yNDk3MiAxMDgxLjYwNTQzLDE5MTAuMTcyOTQgOTU0LjMwMjkyNCwyMTE2LjkzNzM3IEM4MzQuMTQyNzU4LDIzMTIuMTAzMzYgOTE1LjEzMjA3NiwyNDM2LjI2MTg2IDkxNS4xMzIwNzYsMjQzNi4yNjE4NiBDOTE1LjEzMjA3NiwyNDM2LjI2MTg2IDk5MS4zMjkyMzUsMjYwMy4yNjQ4OSAxMTY3LjU5MjU0LDI2MTIuNDQwODggQzEyMzkuMTM3MDgsMjYxNi4xNyAxMjk4LjM3OTkyLDI1OTMuMzg0MTggMTM0My41MjE2OCwyNTY0Ljk5NzM0IEMxNDE5LjY3MTEsMjUxNy41NDI3OCAxNDg0LjUzNiwyNDc1LjI0ODgxIDE1MjIuMjYzNjksMjMxMi43MTYzMiBDMTUyMi40MTQyNSwyMzEyLjA2Mjk4IDE0NzguODAwMSwyMzAxLjM4NTggMTQ3OC44MDAxLDIzMDEuMzg1OCBaIiBpZD0iRmlsbC0xNCIgZmlsbD0iI0VGM0IzMyI+PC9wYXRoPgogICAgICAgICAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=); */
            background-image: url(https://images.unsplash.com/photo-1608099269227-82de5da1e4a8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjF8fGxpYnJhcnklMjBiYWNrZ3JvdW5kfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60);
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
        }

        .signup-form {
            background-color: #002c5f;
            color: #fff;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            margin-top: 10%;
        }

        .signup-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .signup-form input[type="text"],
        .signup-form input[type="email"],
        .signup-form input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 3px;
        }

        .signup-form input[type="submit"] {
            width: 95%;
            padding: 10px;
            background-color: #005c5f;
            font-size: 18px;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .signup-form input[type="submit"]:hover {
            background-color: #333333;
            color: #fff;
        }

        .text-danger {
            color: red;
        }

        .alertfailed {
            color: red;
            margin-top: 3px;
            margin-bottom: 3px;
            margin-left: 20px;
        }

        .alertsuccess {
            color: green;
            /* background-color: #005c5f; */
            margin-top: 3px;
            margin-bottom: 5px;
            margin-left: 40px;
        }
    </style>
</head>

<body>
    <div class="signup-form">
        <h2>Welcome Student</h2>
        <form action="<?= base_url('save'); ?>" method="post" autocomplete="off">
            <?= csrf_field() ?>
            <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                <div class="alertfailed"><?= session()->getFlashdata('fail'); ?></div>
            <?php endif ?>

            <?php if (!empty(session()->getFlashdata('success'))) : ?>
                <div class="alertsuccess"><?= session()->getFlashdata('success'); ?></div>
            <?php endif ?>
            <input type="text" name="name" placeholder="Name" value="<?= set_value('name') ?>">
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'name') : '' ?></span>
            <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
            <input type="password" name="password" placeholder="Password" value="<?= set_value('password') ?>">
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
            <input type="password" name="cpassword" placeholder="Confirm Password" value="<?= set_value('cpassword') ?>">
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'cpassword') : '' ?></span>
            <input type="submit" value="Sign Up">
            <br>
            <br>
            <a href="<?php echo site_url('login') ?>" style="color: white">Already have an account? Login</a>
        </form>
    </div>
</body>

</html>