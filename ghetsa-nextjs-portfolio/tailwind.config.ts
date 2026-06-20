import type { Config } from "tailwindcss";

export default {
  content: ["./src/**/*.{ts,tsx}", "./components/**/*.{ts,tsx}"],
  theme: {
    extend: {
      colors: {
        brand: {
          blue: "#003DA7",
          sky: "#389FE1",
          gold: "#FDC101",
          lemon: "#FFE401",
          ink: "#0F172A",
          cream: "#F8FAFC",
        },
      },
      fontFamily: {
        display: ["var(--font-display)", "ui-serif", "Georgia", "serif"],
        sans: ["var(--font-sans)", "Inter", "system-ui", "sans-serif"],
      },
      boxShadow: {
        glow: "0 20px 80px -24px rgba(56,159,225,0.5)",
      },
      backgroundImage: {
        "brand-gradient":
          "linear-gradient(135deg, #003DA7 0%, #389FE1 45%, #FFE401 100%)",
      },
    },
  },
  plugins: [],
} satisfies Config;
