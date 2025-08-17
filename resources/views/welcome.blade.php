<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive 3D Animated Login Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-gradient {
            background: linear-gradient(135deg, #7c3aed, #db2777);
        }

        .form-container {
            transform: perspective(1200px) rotateY(0deg) rotateX(0deg);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .form-container:hover {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }

        .input-field {
            transition: all 0.4s ease-in-out;
            transform: translateZ(0);
        }

        .input-field:focus {
            transform: translateZ(30px) scale(1.02);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            background-color: rgba(255, 255, 255, 0.95);
        }

        .btn-3d {
            transition: all 0.4s ease-in-out;
            transform: translateZ(0);
            background: linear-gradient(90deg, #4f46e5, #7c3aed);
        }

        .btn-3d:hover {
            transform: translateZ(40px) scale(1.1);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
            background: linear-gradient(90deg, #3b82f6, #6d28d9);
        }

        .blob {
            position: absolute;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            filter: blur(40px);
            animation: float 15s infinite ease-in-out;
        }

        .blob:nth-child(1) {
            width: 200px;
            height: 200px;
            top: 10%;
            left: 15%;
            animation-duration: 12s;
        }

        .blob:nth-child(2) {
            width: 150px;
            height: 150px;
            top: 60%;
            right: 20%;
            animation-duration: 18s;
            animation-delay: -4s;
        }

        .blob:nth-child(3) {
            width: 180px;
            height: 180px;
            bottom: 15%;
            left: 30%;
            animation-duration: 15s;
            animation-delay: -8s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            25% {
                transform: translate(50px, -30px) scale(1.1);
            }

            50% {
                transform: translate(-40px, 20px) scale(0.9);
            }

            75% {
                transform: translate(30px, 40px) scale(1.05);
            }
        }

        .avatar {
            position: absolute;
            top: -60px;
            left: -60px;
            width: 100px;
            height: 100px;
            background: #fefcbf;
            border-radius: 50%;
            border: 3px solid #4b5563;
            display: flex;
            justify-content: center;
            align-items: center;
            transform: translateZ(20px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .avatar-face {
            position: relative;
            width: 60px;
            height: 60px;
        }

        .eye {
            position: absolute;
            width: 20px;
            height: 20px;
            background: white;
            border-radius: 50%;
            border: 2px solid #1f2937;
            top: 15px;
            overflow: hidden;
        }

        .eye-left {
            left: 10px;
        }

        .eye-right {
            right: 10px;
        }

        .pupil {
            position: absolute;
            width: 10px;
            height: 10px;
            background: #1f2937;
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transition: transform 0.2s ease-in-out;
        }
    </style>
</head>

<body class="bg-gradient flex items-center justify-center min-h-screen overflow-hidden">
    <x-toast />
    <div class="blob"></div>
    <div class="blob"></div>
    <div class="blob"></div>
    <div class="form-container bg-white bg-opacity-90 backdrop-blur-md p-10 rounded-3xl shadow-2xl w-full max-w-md relative z-10"
        id="formCard">
        <div class="avatar">
            <div class="avatar-face">
                <div class="eye eye-left">
                    <div class="pupil" id="pupilLeft"></div>
                </div>
                <div class="eye eye-right">
                    <div class="pupil" id="pupilRight"></div>
                </div>
            </div>
        </div>
        <h2 class="text-4xl font-extrabold text-gray-800 text-center mb-8 animate-pulse">Welcome Back</h2>
        <form method="POST" action="/user/login" class="space-y-6">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" id="email" name="email" required
                    class="input-field mt-1 block w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-4 focus:ring-purple-500 focus:border-purple-500 bg-gray-50 transform transition-transform duration-400 placeholder-gray-400"
                    placeholder="Enter your email">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required
                    class="input-field mt-1 block w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-4 focus:ring-purple-500 focus:border-purple-500 bg-gray-50 transform transition-transform duration-400 placeholder-gray-400"
                    placeholder="Enter your password">
            </div>
            <div>
                <button type="submit"
                    class="btn-3d w-full flex justify-center py-3 px-4 border border-transparent rounded-xl text-white font-semibold transform transition-transform duration-400">
                    Sign In
                </button>
            </div>
        </form>
    </div>
    <script>
        // Mouse-driven card tilt
        const formCard = document.getElementById('formCard');
        document.addEventListener('mousemove', (e) => {
            const rect = formCard.getBoundingClientRect();
            const centerX = rect.left + rect.width / 2;
            const centerY = rect.top + rect.height / 2;
            const maxTilt = 15; // Max tilt in degrees
            const mouseX = e.clientX;
            const mouseY = e.clientY;
            const rotateY = ((mouseX - centerX) / (window.innerWidth / 2)) * maxTilt;
            const rotateX = -((mouseY - centerY) / (window.innerHeight / 2)) * maxTilt;
            formCard.style.transform = `perspective(1200px) rotateY(${rotateY}deg) rotateX(${rotateX}deg)`;
        });

        // Keyboard-driven eye movement
        const pupilLeft = document.getElementById('pupilLeft');
        const pupilRight = document.getElementById('pupilRight');
        document.addEventListener('keydown', (e) => {
            let xOffset = 0,
                yOffset = 0;
            const moveDistance = 5; // Pupil movement distance in pixels
            switch (e.key.toLowerCase()) {
                case 'arrowup':
                case 'w':
                    yOffset = -moveDistance;
                    break;
                case 'arrowdown':
                case 's':
                    yOffset = moveDistance;
                    break;
                case 'arrowleft':
                case 'a':
                    xOffset = -moveDistance;
                    break;
                case 'arrowright':
                case 'd':
                    xOffset = moveDistance;
                    break;
            }
            pupilLeft.style.transform = `translate(${xOffset - 50}%, ${yOffset - 50}%)`;
            pupilRight.style.transform = `translate(${xOffset - 50}%, ${yOffset - 50}%)`;
        });
    </script>
</body>

</html>
