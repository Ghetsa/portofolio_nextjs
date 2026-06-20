type Props = {
  title: string;
  className?: string;
  tone?: "lime" | "pink" | "blue";
};

const toneMap = {
  lime: "bg-[#dfff00]",
  pink: "bg-[#fdb6e9]",
  blue: "bg-[#cfe5ff]",
} as const;

export function SectionHeading({ title, className = "", tone = "pink" }: Props) {
  return (
    <h2
      className={`inline-block border-[3px] border-[#1b1b1b] px-4 py-1 font-display text-2xl font-black uppercase tracking-tight shadow-[4px_4px_0_0_#1b1b1b] ${toneMap[tone]} ${className}`}
    >
      {title}
    </h2>
  );
}
