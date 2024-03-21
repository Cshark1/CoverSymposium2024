import 'preline'
import "./bootstrap";

import "/node_modules/flag-icons/css/flag-icons.min.css";

import * as THREE from "three";
import { RenderPass } from "three/examples/jsm/postprocessing/RenderPass.js";
import { EffectComposer } from "three/examples/jsm/postprocessing/EffectComposer.js";

const TEXTURE_PATH = "https://res.cloudinary.com/dg5nsedzw/image/upload/v1641657168/blog/vaporwave-threejs-textures/grid.png";
const DISPLACEMENT_PATH = "https://res.cloudinary.com/dg5nsedzw/image/upload/v1641657200/blog/vaporwave-threejs-textures/displacement.png";

// Textures
const textureLoader = new THREE.TextureLoader();
const gridTexture = textureLoader.load(TEXTURE_PATH);
const terrainTexture = textureLoader.load(DISPLACEMENT_PATH);

const canvas = document.getElementById("canvas");

// Scene
const scene = new THREE.Scene();

// Fog
const fog = new THREE.Fog("#000000", 1, 2.5);
scene.fog = fog;

// Objects
const geometry = new THREE.PlaneGeometry(1, 2, 24, 24);
const material = new THREE.MeshStandardMaterial({
    map: gridTexture,
    displacementMap: terrainTexture,
    displacementScale: 0.4,

});

const plane = new THREE.Mesh(geometry, material);
plane.rotation.x = -Math.PI * 0.5;
plane.position.y = 0.0;
plane.position.z = 0.15;


const plane2 = new THREE.Mesh(geometry, material);
plane2.rotation.x = -Math.PI * 0.5;
plane2.position.y = 0.0;
plane2.position.z = -1.85; // 0.15 - 2 (the length of the first plane)

scene.add(plane);
scene.add(plane2);

// Light
// Ambient Light
const ambientLight = new THREE.AmbientLight("#ffffff", 10);
scene.add(ambientLight);

// Right Spotlight aiming to the left
// const spotlight = new THREE.SpotLight("#d53c3d", 0.01, 25, Math.PI * 0.1, 0.25);
// spotlight.position.set(0.5, 0.75, 2.2);
// // Target the spotlight to a specific point to the left of the scene
// spotlight.target.position.x = -0.25;
// spotlight.target.position.y = 0.25;
// spotlight.target.position.z = 0.25;
// scene.add(spotlight);
// scene.add(spotlight.target);

// Left Spotlight aiming to the right
// const spotlight2 = new THREE.SpotLight("#d53c3d", 20, 25, Math.PI * 0.1, 0.25);
// spotlight2.position.set(-0.5, 0.75, 2.2);
// // Target the spotlight to a specific point to the right side of the scene
// spotlight2.target.position.x = 0.25;
// spotlight2.target.position.y = 0.25;
// spotlight2.target.position.z = 0.25;
// scene.add(spotlight2);
// scene.add(spotlight2.target);


// Sizes
const sizes = {
    width: window.innerWidth,
    height: window.innerHeight,
};

// Camera
const camera = new THREE.PerspectiveCamera(
    75,
    sizes.width / sizes.height,
    0.01,
    20
);
camera.position.x = 0;
camera.position.y = 0.06;
camera.position.z = 1.1;

// Renderer
const renderer = new THREE.WebGLRenderer({
    canvas: canvas,
});
renderer.setSize(sizes.width, sizes.height);
renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

// Post Processing
const effectComposer = new EffectComposer(renderer);
effectComposer.setSize(sizes.width, sizes.height);
effectComposer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

const renderPass = new RenderPass(scene, camera);
effectComposer.addPass(renderPass);

// const rgbShiftPass = new ShaderPass(RGBShiftShader);
// rgbShiftPass.uniforms["amount"].value = 0.0015;
//
// effectComposer.addPass(rgbShiftPass);

// const gammaCorrectionPass = new ShaderPass(GammaCorrectionShader);
// effectComposer.addPass(gammaCorrectionPass);

// Debounce function
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
};

// Debounce the resize event
window.addEventListener("resize", debounce(() => {
    // Update sizes
    sizes.width = document.documentElement.clientWidth;
    sizes.height = document.documentElement.clientHeight - 64;

    // Update camera
    camera.aspect = sizes.width / sizes.height;
    camera.updateProjectionMatrix();

    // Update renderer
    renderer.setSize(sizes.width, sizes.height);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

    // Update effect composer
    effectComposer.setSize(sizes.width, sizes.height);
    effectComposer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
}, 250));

function getRandIntRange(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function lerp(start, end, t) {
    return start * (1 - t) + end * t;
}

const clock = new THREE.Clock();
let startScale

let startDisplacementScale = 0.4;
let endDisplacementScale = getRandIntRange(100, 600) / 1000;
// Initialize t to 0
let t = 0;

// Animate
const tick = () => {
    const elapsedTime = clock.getElapsedTime();

    plane.position.z = (elapsedTime * 0.15) % 2;
    plane2.position.z = ((elapsedTime * 0.15) % 2) - 2;

    // Calculate the current displacement scale using the lerp function
    if (t <= 1) {
        const currentDisplacementScale = lerp(startDisplacementScale, endDisplacementScale, t);

        // Update the displacement scale of the planes
        plane.material.displacementScale = currentDisplacementScale;
        plane2.material.displacementScale = currentDisplacementScale;
    }

    // Increment the transition progress
    t += 0.005; // Increment t by a small amount on each frame

    // If the transition is complete, reset the progress and swap the start and end scales
    if (t >= 1) {
        t = 0; // Reset t to 0
        startDisplacementScale = endDisplacementScale;
        endDisplacementScale = getRandIntRange(100, 600) / 1000;
    }

    // Render
    effectComposer.render();

    setTimeout( function() {

        window.requestAnimationFrame(tick)

    }, 1000 / 60 );
};

tick();
